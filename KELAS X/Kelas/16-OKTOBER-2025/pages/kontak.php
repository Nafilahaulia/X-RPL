<div class="centered-section">
    <div class="form-container">
        <h2>Hubungi Kami</h2>

        <form method="post">
            <div class="mb-3">
                <input type="text" name="nama" class="form-control" placeholder="Nama Lengkap" required>
            </div>
            <div class="mb-3">
                <input type="text" name="pesan" class="form-control" placeholder="Pesan" required>
            </div>
            <div class="mb-3">
                <input type="email" name="email" class="form-control" placeholder="Email" required>
            </div>
            <button type="submit" name="tombol" class="btn btn-primary">Kirim</button>
        </form>

        <?php
        if (isset($_POST['tombol'])){
            $nama = htmlspecialchars($_POST['nama']);
            $pesan = htmlspecialchars($_POST['pesan']);
            $email = htmlspecialchars($_POST['email']);

            echo "<div class='alert alert-succes mt-4'>";
            echo "<h5>Terima kasih atas pesan anda!</h5>";
            echo"<p><strong>Nama :</strong> $nama</p>";
            echo"<p><strong>Email :</strong> $email</p>";
            echo"<p><strong>Pesan :</strong> $pesan</p>";
            echo "</div>";  
        }
        ?>
    </div>
</div>