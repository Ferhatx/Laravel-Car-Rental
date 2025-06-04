# Laravel Car Rental Web Application

Bu proje, Laravel ile geliştirilmiş bir **araç kiralama web uygulamasıdır**. Kullanıcılar araç kiralayabilir, yönetici paneli üzerinden araç ve kira işlemleri takip edilebilir. 

## 🚗 Proje Özellikleri

### Kullanıcı Paneli (Ana Sayfa)
- Kiralık araçların listesi
- Randevu sistemi ile araç kiralama (günlük)
- Araçların detay sayfasında:
  - Kiralanma süresi
  - Araç özellikleri

### Yönetim Paneli
- Kiralanan araçların listesi
- Araç kira ücretleri ve kar/zarar tablosu
- Yeni araç ekleme
- Araçların güncellenmesi veya silinmesi

## 🛠️ Kurulum Talimatları

### Gereksinimler
- PHP >= 8.0
- Composer
- MySQL
- Laravel 10+
- Node.js & NPM (ön uç derlemeleri için)

### Kurulum Adımları

```bash
# Projeyi klonlayın
git clone https://github.com/Ferhatx/Laravel-Car-Rental.git

cd Laravel-Car-Rental

# Bağımlılıkları yükleyin
composer install
npm install && npm run dev

# .env dosyasını oluşturun
cp .env.example .env

# Uygulama anahtarını oluşturun
php artisan key:generate

# Veritabanını ayarlayın (env dosyasına bilgileri girin)
php artisan migrate --seed

# Sunucuyu başlatın
php artisan serve
```

## 📸 Ekran Görüntüleri
> Buraya proje ekran görüntülerini ekleyebilirsiniz.

## 📊 Yönetim Paneli Özellikleri
- Tüm kiralama işlemlerinin listesi
- Araç kira ücretleri ve elde edilen kazanç
- Yeni araç ekleme ve mevcut araç yönetimi

## 🧑‍💻 Geliştirici

**Ferhatx**  
🔗 [GitHub Profilim](https://github.com/Ferhatx)

## 📁 Lisans

Bu proje MIT lisansı ile lisanslanmıştır. Daha fazla bilgi için `LICENSE` dosyasına bakabilirsiniz.

---

Her türlü geri bildiriminiz ve katkılarınız için lütfen pull request gönderin veya issue açın.
