/*
* Curso de Engenharia de Software - UniEVANGÉLICA 
* Disciplina de Programação Web 
* Dev:Andre Lucas de azevedo santana
*/ 

<?php
// OCP/UserRepository.php
class UserRepository implements UserRepositoryInterface {
    public function save(User $user) {
        // Salvar usuário no banco de dados
        // DB::table('users')->insert(...);
    }

    public function getAllUsers(): array {
        // Obter todos os usuários do banco de dados
        // return DB::table('users')->get();
        return []; // Marcador de posição
    }
}
