- User
id              autoincrement
name    
username	                    nomor registrasi
password	    hash
role		    string          admin, panitia, student, pewawancara

- Student
id              autoincrement
complete        boolean         default false
user_id			int	            required
name_verified	boolean         nullable
nik             string          nullable
birthplace      string          nullable
birthdate       date            nullable
akta            string          nullable
nisn            string          nullable
jk		        L / P           nullable
address		    text            nullable
rt		        string          nullable
rw		        string          nullable
desa		    string          nullable
kecamatan	    string          nullable
city		    string          nullable
province	    string          nullable
zip		        string          nullable

lintang         string          nullable
bujur           string          nullable
tempat_tinggal  string          nullable
moda_transportasi   string          nullable

anak ke-berapa (berdasarkan KK)     string          nullable

kks             string          nullable
pkh             string          nullable
kip             string          nullable
layak_pip       string          nullable

ibu
pekerjaan ibu
penghasilan ibu

ayah
pekerjaan ayah
penghasilan ayah

wali
pekerjaan wali
pekerjaan wali

hp_ortu

email
phone

school_id       foreignkey      nullable
school_verified booleah         nullable

height          int             nullable
weight          int             nullable
jarak           int             nullable
waktu           int             nullable

- Jalur
id
name
desc
active

- Jurusan
id
name
last_student

- School
id              
npsn
name
address
last_student

- Document
complete
id
name
student_id
path

- Payment
id
student_id
attachment
amount		
verified_by	id user panitia

- Ppdb
id
student_id
jalur_id
payment_amount
pilihan_1
pilihan_2

- Test
id
btq
tpa

- wawancara
id
user_id
deskripsi keluarga
ekonomi
prestasi
layak pip