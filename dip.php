/*
* Curso de Engenharia de Software - UniEVANGÉLICA 
* Disciplina de Programação Web 
* Desenvolvedor: Andre Lucas de azevedo santana
*/

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
