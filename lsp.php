/*
* Curso de Engenharia de Software - UniEVANGÉLICA 
* Disciplina de Programação Web 
* Desenvolvedor: Andre Lucas de azevedo santana
*/ 

<?php
// LSP/UserRepositoryInterface.php
interface UserRepositoryInterface {
    public function save(User $user);
    public function getAllUsers(): array;
}
