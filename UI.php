    <link rel="stylesheet" href="UI_style.css">
</head>
<body>
    <div id="dropdown" style="visibility: hidden" >
            <button type="button" onclick="nevidim()" class="hamba"><svg class="mobile_UI" viewBox="0 0 24 24" fill="none" ><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"> <path d="M4 18L20 18" stroke="#ffffff" stroke-width="2" stroke-linecap="round"></path> <path d="M4 12L20 12" stroke="#ffffff" stroke-width="2" stroke-linecap="round"></path> <path d="M4 6L20 6" stroke="#ffffff" stroke-width="2" stroke-linecap="round"></path></g></svg></button>
            <div class="dropdown-menu">
                <a href="#">Obec</a>
                <a href="#">Úřad</a>
                <a href="#">Aktuálně</a>
                <a href="#">Fotogalerie</a>
                <a href="#">Kontakt</a>
            </div>
    </div>
    <header>
        <a id="logo" href="index.php"><img id="logo" src="/obrázky/logo.png" alt=""></a>
        
    </header>
    <nav>
        
        <input class="search" type="text">

        <div class="odkazy">
            <a href="#">Obec</a>
            <a href="#">Úřad</a>
            <a href="#">Aktuálně</a>
            <a href="#">Fotogalerie</a>
            <a href="#">Kontakt</a>
        </div>

        <button type="button" onclick="vidim()" class="hamba"><svg class="mobile_UI" viewBox="0 0 24 24" fill="none" ><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"> <path d="M4 18L20 18" stroke="#ffffff" stroke-width="2" stroke-linecap="round"></path> <path d="M4 12L20 12" stroke="#ffffff" stroke-width="2" stroke-linecap="round"></path> <path d="M4 6L20 6" stroke="#ffffff" stroke-width="2" stroke-linecap="round"></path></g></svg></button>
        <script>
        function vidim() {document.getElementById('dropdown').style.visibility='visible'; disableScroll();}
        function nevidim() {document.getElementById('dropdown').style.visibility='hidden'; enableScroll();}
    </script>
        <script>
        function disableScroll() {document.body.classList.add("zastav");}
        function enableScroll() {document.body.classList.remove("zastav");}
    </script>
    </nav>
    