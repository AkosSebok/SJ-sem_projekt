<?php
    class User {
        private PDO $pdo;
        public function __construct(PDO $pdo) {
            $this->pdo = $pdo;
        }

        public function create(string $username, string $email, string $password): int {
            $hashed = password_hash($password, PASSWORD_DEFAULT);
            $stmt = $this->pdo->prepare("INSERT INTO users (username, email, password, role) VALUES (?, ?, ?, 'user')");
            $stmt->execute([$username, $email, $hashed]);
            return (int) $this->pdo->lastInsertId();
        }
        public function findByEmail(string $email) {
        $stmt = $this->pdo->prepare("SELECT * FROM users WHERE email = ?");
        $stmt->execute([$email]);
        return $stmt->fetch(PDO::FETCH_ASSOC);
        }
        public function verifyPassword(string $password, string $hash): bool {
            return password_verify($password, $hash);
        }

        public function delete(int $id): void {
            $stmt = $this->pdo->prepare(" DELETE FROM users WHERE id = ?");
            $stmt->execute([$id]);
        }

        public function findAll() {
            $stmt = $this->pdo->query("SELECT u.*, COUNT(e.id) AS event_count FROM users u LEFT JOIN events e ON u.id = e.created_by_id GROUP BY u.id");
            return $stmt->fetchAll(PDO::FETCH_ASSOC);
        }
        public function count() {
            return $this->pdo->query("SELECT COUNT(*) FROM users")->fetchColumn();
        }
    }