<?php
include "koneksi.php";
if(isset($_POST["post_id"]))
{
 $output = '';
 $query = "SELECT * FROM tb_siswa WHERE id_siswa = '".$_POST["post_id"]."'";
 $result = mysql_query($query);
 while($row = mysql_fetch_array($result))
 {

  $output .= '<div class="modal-header">
            <button type="button" class="close" data-dismiss="modal">&times;</button>
            <h4 class="modal-title">Nama Siswa : '.$row['nama_siswa'].'</h4>
        </div>
        <div class="modal-body">
        <label>Data Siswa</label>
        <table class="table table-bordered">
        <tbody>
        <tr>
        <td width="30%">NIS</td><td width="50px">:</td><td>'.$row['id_siswa'].'</td>
        </tr>
        <tr>
        <td>NISN</td><td>:</td><td>'.$row['nisn'].'</td>
        </tr>
        <tr>
        <td>Jenis Kelamin</td><td>:</td><td>'.$row['gender_siswa'].'</td>
        </tr>

        <tr>
        <td>Dokumen</td><td>:</td><td><img src="images/'.$row['foto_siswa'].'" class="img-thumbnail" style="width:70px; height:70px;"></td>
        </tr>
        </tbody>
        </table>
        ';
  $query_1 = "SELECT id_siswa FROM tb_siswa WHERE id_siswa < '".$_POST['post_id']."' ORDER BY id_siswa DESC LIMIT 1";
  $result_1 = mysql_query($query_1);
  $data_1 = mysql_fetch_array($result_1);
  $query_2 = "SELECT id_siswa FROM tb_siswa WHERE id_siswa > '".$_POST['post_id']."' ORDER BY id_siswa ASC LIMIT 1";
  $result_2 = mysql_query($query_2);
  $data_2 = mysql_fetch_array($result_2);
  $if_previous_disable = '';
  $if_next_disable = '';
  if($data_1["id_siswa"] == "")
  {
   $if_previous_disable = 'disabled';
  }
  if($data_2["id_siswa"] == "")
  {
   $if_next_disable = 'disabled';
  }
  $output .= '
  <div align="center">
   <button type="button" name="previous" class="btn btn-default btn-sm previous" style="float:left;" id="'.$data_1['id_siswa'].'" '.$if_previous_disable.'><i class="ti ti-arrow-left"></i> Sebelumnya</button>
   <button type="button" name="next" class="btn btn-default btn-sm next" style="float:right;" id="'.$data_2['id_siswa'].'" '.$if_next_disable.'>Selanjutnya <i class="ti ti-arrow-right"></i></button>
  </div>
  <br /><br /></div>
  ';
 }
 echo $output;
}

?>
