<!DOCTYPE html>
<head>
    <title>tiku</title>
</head>
<body>
    <?php
    $this->load->view('header');
    ?>
    <marquee>Harga Rp. 60.000,00/ Tiket Setiap Hari</marquee>
    <h2 align="center"> Film Terbaru </h2>
    <div class="content">
    <!--Buat Form-->
    <form method="POST" action="<?php echo base_url(); ?>index.php/welcometiku/jadwal">
    <table>
        <tr> <!--Keterangan film-->
    <?php foreach($data as $film){?>
        <td>
            <center>
    <img height="450px" src="<?php echo base_url(); ?>assets/images/<?php echo $film['foto']; ?>">
    <h5><?php  echo $film['judul']; ?> </h5>
    </center>
    <p> <?php  echo $film['sinopsis']; ?> </p>
    <br>  <button name="id_film" value="<?php echo $film['id_film'];?>" type="submit" class="btn"> Pesan </button>
    <small><?php echo $film['keterangan']; ?></small>
    <br><br>
    </td>
    <?php } ?>
    </tr>
    </form>
    </div>
</body>
</html>