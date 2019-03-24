function calcprice(){
    var tot = 0
    for (var i = 0; i < $('input[type="number"]').length; i++) {
        q = $('input[type="number"]')[i].value
        p = $('.price')[i].textContent
        tot += (Number(q) * Number(p))
    }
    $('#total').text(tot);
}

$('.btns').on('click',function(){
    var x = $(this)[0].name
    $('input[type="number"]')[x.slice(1)-1].value =Number($('input[type="number"]')[x.slice(1)-1].value) + Number(1)
    calcprice()
});
