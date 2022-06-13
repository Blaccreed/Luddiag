
const getGrille = () => {
    //Ajax query
    $.ajax({
        url: '../../Controller/Exposant/grille.php',
        type: 'GET',
        dataType: 'json',
        success: function (data) {
        }})
}