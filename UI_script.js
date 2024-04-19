function disableScroll() {document.body.classList.add("zastav");}
function enableScroll() {document.body.classList.remove("zastav");}

function sleep(ms) {
    return new Promise(resolve => setTimeout(resolve, ms));
}

function vidim() {document.getElementById('dropdown').style.opacity='100%'; disableScroll(); document.getElementById('dropdown').style.visibility='visible';}
async function nevidim() {document.getElementById('dropdown').style.opacity='0%'; enableScroll(); await sleep(500);document.getElementById('dropdown').style.visibility='collapse';}