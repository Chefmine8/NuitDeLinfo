<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Nuit de L'info</title>
    <link rel="stylesheet" href="./assert/style.css">
    <script src="./assert/script.js" defer></script>
    <script>
        function detectDevice() {
            const userAgent = navigator.userAgent.toLowerCase();

            if (/mobile|android|iphone|ipad|ipod/.test(userAgent)) {
                window.location.href = "./mobile.php";
            }
        }
        window.onload = detectDevice;
    </script>
</head>
<body>
    <div class="hover-container">
        <div class="hover-item t1" data-modal="modal5"></div>
        <div class="hover-item t2" data-modal="modal2"></div>
        <div class="hover-item t3" data-modal="modal3"></div>
        <div class="hover-item t4" data-modal="modal4"></div>
        <div class="hover-item t5" data-modal="modal1"></div>
    </div>

    <div class="modal" id="modal1">
        <div class="modal-content">
            <h1>Poumons - Algues & Phytoplanctons</h1>
            <h3>Tout comme les poumons de notre cœur nous apportent de l’oxygène et nous permettent de respirer, le phytoplancton et les algues présents dans l’océan permettent à la terre de respirer, en absorbant le CO2 et en produisant plus de 50 % de l’oxygène que nous respirons. Cependant le phytoplancton et les algues absorbent de moins en moins de CO2 notamment à cause du réchauffement climatique, l’acidification des Océan, la pollution, la perturbation des cycles des nutriments et les effets des UV. </h3>
        </div>
    </div>
    <div class="modal" id="modal2">
        <div class="modal-content">
            <h1>Système digestif - Phytoplanctons</h1>
            <h3>Les phytoplanctons sont le système digestif de l’océan. En captant l’énergie du soleil grâce à la photosynthèse, ils alimentent toute la chaîne alimentaire marine, des plus petites crevettes aux plus grands prédateurs comme les baleines. Tout comme notre corps a besoin d’être nourri pour survivre, l’océan a besoin des phytoplanctons pour que la chaîne alimentaire ne soit pas détruite. Cependant le phytoplancton est confronté à des défis multiples, comme le réchauffement climatique, l’acidification des océans, diminution des nutriments, pollution, rayonnement UV accru et perturbations climatiques. Ces menaces amènent des conséquences graves pour l'équilibre écologique des océans.</h3>
        </div>
    </div>
    <div class="modal" id="modal3">
        <div class="modal-content">
            <h1>pH et sang</h1>
            <h3>Le pH de l’eau océanique est essentiel à la survie des espèces marines. Une acidification excessive (causée par l’absorption de CO₂) perturbe la santé des écosystèmes, mettant en danger les coraux, les mollusques et bien d'autres. Ainsi, l’augmentation du pH de l’océan est, tout comme celle du sang chez un humain, extrêmement dangereuse.</h3>
        </div>
    </div>
    <div class="modal" id="modal4">
        <div class="modal-content">
            <h1>Peau et surface de l'océan</h1>
            <h3>Comme la peau humaine protège le corps des agressions extérieures, la surface de l’océan joue un rôle protecteur pour l'écosystème marin. Elle aide aussi à réguler la chaleur, un peu comme la transpiration régule notre température corporelle. Une peau abîmée expose le corps aux infections et déséquilibres. De la même manière, une surface océanique perturbée, par exemple par la pollution ou le réchauffement, menace tout l'équilibre des écosystèmes marins.</h3>
        </div>
    </div>
    <div class="modal" id="modal5">
        <div class="modal-content">
            <h1>Coeur - Récifs coralients</h1>
            <h3>Les récifs coralliens sont le "cœur battant" des océans. Ils abritent une biodiversité incroyable, fournissent un habitat pour des milliers d'espèces et protègent les côtes des vagues et des tempêtes. Sans les coraux, de nombreuses espèces marines ne pourraient pas survivre. Tout comme dans le corps humain, ils sont le centre de la vie des océans. Sans ce cœur, l’océan ne pourrait pas survivre. Aujourd’hui, on remarque sur toute la planète un blanchissement des coraux et une disparition de certaines parties de la barrière de corail. Il est donc essentiel de le protéger en limitant notre impact CO2 ainsi que la pollution des mers et océans.</h3>
        </div>
    </div>
</body>
</html>
