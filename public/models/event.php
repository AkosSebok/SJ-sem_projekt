<?php
    class Event {
        private PDO $pdo;
        public function __construct(PDO $pdo) {
            $this->pdo = $pdo;
        }
        public function create(string $title, string $description, string $date, string $location, string $category, ?int $createdById): void {
            $stmt = $this->pdo->prepare("INSERT INTO events(title, description, date, location, category, created_by_id) VALUES(?, ?, ?, ?, ?, ?)");
            $stmt->execute([$title, $description, $date, $location, $category, $createdById]);
        }
        public function alreadyExists(string $title, string $description, string $date, string $location, string $category, ?int $createdById): bool {
            $stmt = $this->pdo->prepare("SELECT COUNT(*) FROM events WHERE title = ? AND description = ? AND date = ? AND location = ? AND category = ? AND created_by_id <=> ?");
            $stmt->execute([$title, $description, $date, $location, $category, $createdById]);
            return (bool) $stmt->fetchColumn();
        }
        public function getUserId(string $username, string $email): ?int {
            $stmt = $this->pdo->prepare("SELECT id FROM users WHERE username = ? AND email = ?");
            $stmt->execute([$username, $email]);
            $user = $stmt->fetch(PDO::FETCH_ASSOC);
            return $user ? (int) $user['id'] : 0;
        }

        public function update(int $id, string $title, string $description, string $date, string $location, string $category): void {
            $stmt = $this->pdo->prepare("UPDATE events SET title = ?, description = ?, date = ?, location = ?, category = ? WHERE id = ?");
            $stmt->execute([$title, $description, $date, $location, $category, $id]);
        }
        public function findById(int $id) {
            $stmt = $this->pdo->prepare("SELECT * FROM events WHERE id = ?");
            $stmt->execute([$id]);
            return $stmt->fetch(PDO::FETCH_ASSOC);
        }

        public function delete(int $id): void {
            $stmt = $this->pdo->prepare(" DELETE FROM events WHERE id = ?");
            $stmt->execute([$id]);
        }

        public function findAll() {
            $stmt = $this->pdo->query("SELECT e.*, u.username FROM events e LEFT JOIN users u ON e.created_by_id = u.id");
            return $stmt->fetchAll(PDO::FETCH_ASSOC);
        }
        public function count() {
            return $this->pdo->query("SELECT COUNT(*) FROM events")->fetchColumn();
        }
    }