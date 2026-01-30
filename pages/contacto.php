<?php
require_once __DIR__ . '/../config/bootstrap.php';

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

// Se NÃO usares composer, comenta estas linhas e usa require manual abaixo
// require_once __DIR__ . '/../libs/PHPMailer/src/Exception.php'; //nao tenho isso
// require_once __DIR__ . '/../libs/PHPMailer/src/PHPMailer.php'; //isso tambem nao tenho
// require_once __DIR__ . '/../libs/PHPMailer/src/SMTP.php'; //idem, nao tenho

$pageTitle = "Contacto";

if (session_status() === PHP_SESSION_NONE) {
    session_start();
}

$success = false;
$error = "";

// CSRF token
if (empty($_SESSION['csrf_token'])) {
    $_SESSION['csrf_token'] = bin2hex(random_bytes(32));
}

$nomeVal = $emailVal = $msgVal = "";

if ($_SERVER['REQUEST_METHOD'] === 'POST') {

    // Honeypot anti-spam
    if (!empty($_POST['website'])) {
        die();
    }

    // CSRF validation
    if (
        !isset($_POST['csrf_token']) ||
        !hash_equals($_SESSION['csrf_token'], $_POST['csrf_token'])
    ) {
        $error = "Falha de segurança. Atualize a página e tente novamente.";
    } else {

        $nome = sanitize($_POST['nome'] ?? '');
        $email = filter_var($_POST['email'] ?? '', FILTER_VALIDATE_EMAIL);
        $mensagem = sanitize($_POST['mensagem'] ?? '');

        $nomeVal = $nome;
        $emailVal = $_POST['email'] ?? '';
        $msgVal = $mensagem;

        if (!$nome || !$email || !$mensagem) {
            $error = "Por favor, preencha todos os campos corretamente.";
        } else {
            try {
                // Guardar na BD
                $stmt = $pdo->prepare(
                    "INSERT INTO contatos (nome, email, mensagem) VALUES (?, ?, ?)"
                );
                $stmt->execute([$nome, $email, $mensagem]);

                // ENVIO DE EMAIL COM SMTP
                $mail = new PHPMailer(true);

                $mail->isSMTP();
                $mail->Host       = 'smtp.hostinger.com'; // ou smtp.gmail.com
                $mail->SMTPAuth   = true;
                $mail->Username   = 'contacto@engenharialean.com';
                $mail->Password   = 'SENHA_DO_EMAIL';
                $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;
                $mail->Port       = 587;

                $mail->CharSet = 'UTF-8';

                $mail->setFrom('contacto@engenharialean.com', 'Engenharia Lean');
                $mail->addAddress('contacto@engenharialean.com');
                $mail->addReplyTo($email, $nome);

                $mail->isHTML(true);
                $mail->Subject = "Novo contacto via website";
                $mail->Body    = "
                    <strong>Nome:</strong> {$nome}<br>
                    <strong>Email:</strong> {$email}<br><br>
                    <strong>Mensagem:</strong><br>
                    <p>{$mensagem}</p>
                ";

                $mail->send();

                $success = true;
                $_SESSION['csrf_token'] = bin2hex(random_bytes(32));
                $nomeVal = $emailVal = $msgVal = '';
            } catch (Exception $e) {
                $error = "Mensagem enviada, mas o email não pôde ser entregue.";
            } catch (PDOException $e) {
                $error = "Erro ao guardar a sua mensagem.";
            }
        }
    }
}

include __DIR__ . '/../includes/head.php';
include __DIR__ . '/../includes/header.php';
?>

<!-- HERO -->
<section class="py-20 bg-gray-50 dark:bg-gray-900 text-center">
    <div class="container mx-auto px-4">
        <h1 class="text-4xl font-bold mb-6">Contacto</h1>
        <p class="text-xl text-gray-600 dark:text-gray-400 max-w-2xl mx-auto">
            Vamos conversar sobre como melhorar os resultados da sua organização.
        </p>
    </div>
</section>

<!-- FORM -->
<section class="py-20 bg-white dark:bg-gray-800">
    <div class="container mx-auto px-4 max-w-3xl">

        <?php if ($success): ?>
            <div class="mb-8 bg-green-100 border border-green-300 text-green-700 px-6 py-4 rounded-xl">
                Mensagem enviada com sucesso. Entraremos em contacto brevemente.
            </div>
        <?php endif; ?>

        <?php if ($error): ?>
            <div class="mb-8 bg-red-100 border border-red-300 text-red-700 px-6 py-4 rounded-xl">
                <?= htmlspecialchars($error); ?>
            </div>
        <?php endif; ?>

        <form method="POST" class="space-y-6">

            <input type="hidden" name="csrf_token" value="<?= $_SESSION['csrf_token']; ?>">
            <input type="text" name="website" class="hidden">

            <div>
                <label class="block text-sm font-medium mb-2">Nome</label>
                <input type="text" name="nome" required
                       value="<?= htmlspecialchars($nomeVal); ?>"
                       class="w-full px-4 py-3 rounded-lg border dark:bg-gray-800 focus:ring-2 focus:ring-lean-blue">
            </div>

            <div>
                <label class="block text-sm font-medium mb-2">Email</label>
                <input type="email" name="email" required
                       value="<?= htmlspecialchars($emailVal); ?>"
                       class="w-full px-4 py-3 rounded-lg border dark:bg-gray-800 focus:ring-2 focus:ring-lean-blue">
            </div>

            <div>
                <label class="block text-sm font-medium mb-2">Mensagem</label>
                <textarea name="mensagem" rows="5" required
                          class="w-full px-4 py-3 rounded-lg border dark:bg-gray-800 focus:ring-2 focus:ring-lean-blue"><?= htmlspecialchars($msgVal); ?></textarea>
            </div>

            <button type="submit"
                    class="w-full bg-lean-blue hover:bg-blue-600 text-white font-bold py-4 rounded-lg transition">
                Enviar Mensagem
            </button>
        </form>
    </div>
</section>

<?php
include __DIR__ . '/../includes/footer.php';
include __DIR__ . '/../includes/scripts.php';
?>
