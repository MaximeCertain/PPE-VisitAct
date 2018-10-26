function open_file(nomFichier)
{
        window.open(nomFichier,'Document','menubar=no, scrollbars=no, top=100, left=100, width=700, height=900');
}
function recharger_page_veille()
{
    typeveille=document.forms[0].typeveille.value ;
    document.location="index.php?uc=eleve_veille_poster&typeveille=" + typeveille;
}