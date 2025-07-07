<?php include 'config.php'; ?>
<!DOCTYPE HTML>
<html>
    <head>
        <title>Catatan Harian</title>
        <script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script>
    </head>
    <body class="bg-gray-100 p-6">
        <div class="max-w-xl mx-auto bg-white p-6 rounded shadow">
            <h1 class="text-2xl font-bold mb-4">Catatan Harian</h1>

            <!-- form -->
            <form action="simpan.php" method="post" class="mb-4">
                <textarea name="isi" placeholder="Tulis Catatan..." class="w-full p-2 border-rounded" required></textarea>
                <button type="submit" class="bg-blue-500 text-white px-4 py-2 rounded mt-2 hover:bg-blue-600">Simpan</button>
            </form>

            <!-- Catatan -->
            <?php
            $hasil = $conn->query("SELECT * FROM notes ORDER BY dibuat_pada DESC");
            while ($row = $hasil->fetch_assoc()) {
                echo "
                <div class='border p-3 mb-2 rounded'>
                <p>" . htmlspecialchars($row['isi']) . "</p>
                <div class='text-sm text-gray-500'>" . $row['dibuat_pada'] . "</div>
                <div class='mt-2'>
                <a href='edit.php?id={$row['id']}' class='text-blue-500'>Edit</a> |
                <a href='hapus.php?id={$row['id']}' onclick='return confirm(\"Hapus catatan?\")' class='text-red-500'>Hapus</a>
                </div>
                </div>
                ";
            } 
            ?>
        </div>
    </body>
</html>