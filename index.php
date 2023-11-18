<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Suat Munuklu Password Generator">
    <meta name="keywords" content="Password, generator , şifre , oluştur, oluşturucu , generators">
    <meta name="author" content="Suat Münüklü">
    <title>Password Generator | Şifre Oluşturucu</title>
    <link rel="stylesheet" href="style.css">
    <style>
        @media only screen and (max-width: 800px) {
            body {
            }
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>Password Generator | <b>Şifre Oluşturucu</b></h1>
        <form action="" method="post">
            <label for="length">Password Length | <b>Şifre Uzunluğu</b>:</label>
            <input type="number" id="length" name="length" min="6" max="60" value="12" required>

            <label for="uppercase">Include Uppercase Letters | <b>Büyük Harfleri Dahil Et</b>:</label>
            <input type="checkbox" id="uppercase" name="uppercase" checked>

            <label for="lowercase">Include Lowercase Letters | <b>Küçük Harfleri Dahil Et</b>:</label>
            <input type="checkbox" id="lowercase" name="lowercase" checked>

            <label for="numbers">Include Numbers | <b>Sayıları Dahil Et</b>:</label>
            <input type="checkbox" id="numbers" name="numbers" checked>

            <label for="symbols">Include Symbols | <b>Sembolleri Dahil et</b> :</label>
            <input type="checkbox" id="symbols" name="symbols" checked>

            <button type="submit">Generate Password | <b>Şifre Oluştur</b></b></button>
        </form>

        <?php
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            include("password_generator.php");
        }
        ?>
        
        <div style="margin-top: 30px;">
     <div class="container">
    <h2>Şifre Oluşturu Hakkında </h2>
    <p>Şifre Oluşturucu , password generator tamamen ücretsiz bir internet şifre oluşturma uygulamasıdır. Oluşturmak istediğiniz şifreyi, büyük ve küçük harflerin yanı sıra sembol, rakam ekleyerek kişiselleştirmeniz mümkündür. Açıkçası, ne kadar çok seçenek seçerseniz, şifreniz o kadar korunur. Benzer özellikleri hariç tutma seçeneği, şifrenizde sıfır ve 'O' harfi gibi birbirine benzeyen harf ve karakterlerden uzak durmanıza olanak tanır.

Üstelik şifrenin ne kadar süreye sahip olması gerektiğine ve aynı anda oluşturmak istediğiniz şifre sayısına da karar verebilirsiniz.

Şifrenizde ihtiyaç duyduğunuz rakam türlerini seçtikten sonra 'Şifre Oluştur'a tıklamanız yeterli.

Şifre Oluşturucu tamamen güvenlidir. Oluşturduğunuz son derece güvenli şifreler https://www.suatmunuklu.com da dahil hiç bir yerde saklanmaz. Bu oluşturucu kullanılarak hiçbir özel bilginiz birikmeyecektir.</p>

    <h2>Sıkça Sorulan Sorular </h2>
    
    <h3>1. Şifre Oluşturucu ile Ürettiğim Şifreleri Nerede Kullanabilirim? </h3>
    <p>Oluşturduğunuz şifreleri dilediğiniz site, program veya işletim sisteminde kullanabilirsiniz.</p>

    <h3>2. Güçlü Bir Şifre Kullanmak Gizliliğimi Korumak İçin Yeterli mi?</h3>
    <p>Büyük ve küçük harflerin yanı sıra semboller, sayılar içeren güçlü şifreler kullanmak, bilgisayar korsanlarının kendi bireysel hesaplarınızı çalmasını inanılmaz derecede zorlaştırır. Ancak zorlayıcı bir şifre kullanıyor olsanız bile internet gizliliğinizin ciddi derecede savunmasız olabileceği durumlar da vardır. Üniversitede, tatil yerlerinde, havalimanlarında veya İnternet Eğlencesinde halka açık WiFi erişim noktalarını çok kullanıyorsanız, internette gezinmenize fazladan bir gizlilik ve güvenlik katmanı getirmek için sanal bir özel ağa veya VPN'ye bağlanmak mümkündür.</p>
    
    <footer class="text-center">
<p><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">© 2014 - 2023 Tüm Hakları Saklıdır - <a href="https://www.suatmunuklu.com" target="_blank"> https://www.SuatMunuklu.com </a></font></font></p>
<p><strong><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Herhangi bir şifreyi saklamıyoruz.</font></font></strong></p>
</footer>
    <div style="margin-top: 30px;">

</div>
</body>
</html>
