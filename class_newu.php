<?PHP
class user {
    
    public $dns;
    public $username;
    public $passwd;
    


    public function consuta($nome, $senha){
        $This->dsn = "mysql:host=localhost;dbname=bd;port=3307";
        $This->username = "root";
        $This->passwd = "";
        $pdo = new PDO($This->dsn, $This->username, $This->passwd);

        $user = $_POST["usuario"];
        $passwd = $_POST["senha"];

        $stmt = $pdo->prepare("SELECT * FROM usuario WHERE usuario = :user AND senha = :passwd");
        $stmt = bindParam(':user', $This->user);
        $stmt = bindParam(':passwd', $This->passwd);
        $stmt->execute();

    }}


