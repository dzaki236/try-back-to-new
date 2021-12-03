<?php 


$nilai = "A";

// Percabangan yang sederhana jika hanya membandingkan 1 variable 

# Cara 1
switch ($nilai) {
   case 'A':
      echo "Anda lulus dengan baik \n";
   break;
   case 'B':
      echo "Anda Lulus \n";
   break;
   case 'C':
      echo "Anda tidak lulus \n";
   break;
   case 'D':
      echo "Anda parah sekali \n";

   break;

   default:
   echo "Anda mungkin salah jurusan? \n";
   break;
}

# Cara 2
switch ($nilai):
   case 'A':
      echo "Anda lulus dengan baik \n";
   break;
   case 'B':
      echo "Anda Lulus \n";
   break;
   case 'C':
      echo "Anda tidak lulus \n";
   break;
   case 'D':
      echo "Anda mungkin salah jurusan? \n";
   break;

   default:
      # code...
      break;
   endswitch;
?>