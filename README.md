# webservice-tugas-4

### Nama: Sativa Wahyu Priyanto
### Nim: 17.01.53.0052

## Dokumentasi API

### Mengambil semua data/post
GET http://webservice.postku.org/tugas4/rest.php

### Mengambil 1 data/post
GET http://webservice.postku.org/tugas4/rest.php?id={id}
#### value:
-id (int)

### Mengedit data/post
POST http://webservice.postku.org/tugas4/rest.php?update
#### value:
-id (int)
-title (string)
-size (string)
-dl (string)
-ss (string)

### Menghapus data/post
POST http://webservice.postku.org/tugas4/rest.php?delete
#### value:
-id (int)
