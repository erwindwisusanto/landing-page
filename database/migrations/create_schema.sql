CREATE TABLE IF NOT EXISTS kur_bni_n_rme_klinik_pintar (
  id INT PRIMARY KEY AUTO_INCREMENT NOT NULL,
  name VARCHAR(100) NOT NULL,
  phone VARCHAR(16) NOT NULL,
  clinic_name VARCHAR(255) NOT NULL,
  clinic_address VARCHAR(255) NOT NULL,
  operational_license_number VARCHAR(200),
  clinic_fasyankes_code VARCHAR(200),
  created_at DATETIME,
  updated_at DATETIME
);
