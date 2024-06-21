/*
* Curso de Engenharia de Software - UniEVANGÉLICA 
* Disciplina de Programação Web 
* Desenvolvedor: Andre Lucas de azevedo santana
*/ 

<?php
// SRP/User.php
class User {
    public $id;
    public $name;
    public $email;
    public $password;

    public function __construct($id, $name, $email, $password) {
        $this->id = $id;
        $this->name = $name;
        $this->email = $email;
        $this->password = $password;
    }
}

<?php
// OCP/UserRepository.php
class UserRepository implements UserRepositoryInterface {
    public function save(User $user) {
        // Implementação para salvar usuário no banco de dados
        // DB::table('users')->insert(...);
    }

    public function getAllUsers(): array {
        // Implementação para obter todos os usuários do banco de dados
        // return DB::table('users')->get();
        return []; // Apenas um espaço reservado
    }
}

<?php
// LSP/UserRepositoryInterface.php
interface UserRepositoryInterface {
    public function save(User $user);
    public function getAllUsers(): array;
}

<?php
// ISP/CSVExporterInterface.php
interface CSVExporterInterface {
    public function export(array $data, $filename);
}

<?php
// DIP/UserService.php
class UserService {
    private $userRepository;
    private $mailService;
    private $csvExporter;

    public function __construct(
        UserRepositoryInterface $userRepository,
        MailServiceInterface $mailService,
        CSVExporterInterface $csvExporter
    ) {
        $this->userRepository = $userRepository;
        $this->mailService = $mailService;
        $this->csvExporter = $csvExporter;
    }

    public function saveUser(User $user) {
        $this->userRepository->save($user);
        $this->mailService->sendEmail($user->email, "Bem-vindo", "Obrigado por se registrar!");
    }

    public function exportUsersToCSV() {
        $users = $this->userRepository->getAllUsers();
        $this->csvExporter->export($users, 'usuarios.csv');
    }
}
