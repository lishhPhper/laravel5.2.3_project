
//页面刷新时导航菜单的选中状态
$(function(){
    //判断session是否存在
    if ($.session.get('personal_leftId')){
        //获取 session 中菜单对象的ID
        var id  = $.session.get('personal_leftId');
        $('.personal_left dl dd a')[id].parentNode.setAttribute('class','on');
    }

});

//个人中心左侧导航菜单
$('.personal_left dl dd a').click(function(){

    $(this).parent().addClass('on').siblings('dd').removeClass('on');

    //使用自定义属性存入session
    $.session.set('personal_leftId', $(this).attr('data-memu'));
    //跳转
    location.href = $(this).attr('href');

    return false;
});

$('.left_memu_personal').on('click', function() {
    $.session.set('personal_leftId', '7');

    // return false;
});

$('.left_memu_orders').on('click', function() {
    $.session.set('personal_leftId', '4');

    // return false;
});

$('.left_memu_favorites').on('click', function() {
    $.session.set('personal_leftId', '1');

    // return false;
});

$('.left_memu_favorites1').on('click', function() {
    $.session.set('personal_leftId', '1');

    // return false;
});

$('.left_memu_integral').on('click', function() {
    $.session.set('personal_leftId', '9');

    // return false;
});

$('.left_memu_coupon').on('click', function() {
    $.session.set('personal_leftId', '11');

    // return false;
});

$('.left_memu_newest').on('click', function() {
    $.session.set('personal_leftId', '13');

    // return false;
});

//选项卡
$('.personal_tab_header li a').click(function(){

    $.session.set('personal_leftId', $(this).attr('data-memu'));

    location.href = $(this).attr('href');

    return false;
});
