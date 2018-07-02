$(document).ready(function() {
    if (/Mobi/.test(navigator.userAgent)) {
        $("li.top > a").attr('href', '#');
    }
    $("#timnangcao").click(function() {
        $(".search-hiden").slideToggle('show');
        if ($(this).text() != 'Ẩn tìm nâng cao') $(this).text('Ẩn tìm nâng cao');
        else$(this).text('Tìm kiếm nâng cao');
    });
    
    $("img").addClass('img-responsive');
    
    if ($(document).width() < 768) {
        $("#navigation > .top > a").attr('href', '#');
        $(".dropdown").unbind();
        $(".cart, .nav-cart").remove();
        nav = $("#menutop").html();
        nav2 = $(".navbar-left-fix").html();
        var strVar = "";
        strVar += "<nav id=\"c-menu--push-left\" class=\"navbar-default c-menu c-menu--push-left\">";
        strVar += nav;
        strVar += "  <button class=\"c-menu__close\"><span class=\"glyphicon glyphicon-arrow-left\"><\/span>Ẩn menu <\/button>";
        strVar += "<\/nav>";
        $('body').append(strVar);
        var strVar = "";
        strVar += "<nav id=\"c-menu--push-right\" class=\"navbar-default c-menu c-menu--push-right\">";
        strVar += nav2;
        strVar += "  <button class=\"c-menu__close\">Ẩn menu <span class=\"glyphicon glyphicon-arrow-right\"><\/span><\/button>";
        strVar += "<\/nav>";
        $('body').append(strVar);
        $(".mega-menu-column").css('width', '100%');
        $(".mega-menu").removeClass('mega-menu');
        $("#leftmenu .navbar-toggle, #menutop .navbar-toggle").remove();
        $(".mega-menu-column li").css({
            'list-style': 'none',
            'height': '24px'
        });
        $("#c-menu--slide-right li").css({
            'list-style': 'none',
            'height': '24px'
        });
        var pushRight = new Menu({
            wrapper: '#o-wrapper',
            type: 'push-right',
            menuOpenerClass: '.rightmenu',
            maskId: '#c-mask'
        });
        var pushRightBtn = document.querySelector('.rightmenu');
        pushRightBtn.addEventListener('click', function(e) {
            e.preventDefault;
            pushRight.open();
        });
        var pushLeft = new Menu({
            wrapper: '#o-wrapper',
            type: 'push-left',
            menuOpenerClass: '.leftmenu',
            maskId: '#c-mask'
        });
        var pushLeftBtn = document.querySelector('.leftmenu');
        pushLeftBtn.addEventListener('click', function(e) {
            e.preventDefault;
            pushLeft.open();
        });
    }
    $("input").focus(function(e) {
        e.preventDefault();
    });
    htmlwith = $(document).width();
    if (htmlwith == 768) {
        $("meta[name='viewport']").attr('content', 'width=1024');
        $(".mobi").hide();
    }
    
    select_address();
});

function select_address() {
    var cityInput = $('#city');
    var cityWrapper = $('.form-city');
    var districtInput = $('#district');
    var districtWrapper = $('.form-district');
    var wardWrapper = $('.form-ward');
    
    cityInput.unbind('change').bind('change', function(){
        var value = $('#city option:selected').attr('data-code');
        districtWrapper.remove();
        wardWrapper.remove();
        if (value != 0) {
            $.ajax({
                type: "POST",
                url: BASE_URL + '/ajax/getaddress',
                data: {
                    type: 'district',
                    province_code: value,
                    title: 'Quận/Huyện'
                },
                success: function (response) {
                    cityWrapper.after(response);
                    select_address();
                }
            });
        }
    });
    
    districtInput.unbind('change').bind('change', function(){
        var value = $('#district option:selected').attr('data-code');
        wardWrapper.remove();
        if (value != 0) {
            $.ajax({
                type: "POST",
                url: BASE_URL + '/ajax/getaddress',
                data: {
                    type: 'ward',
                    district_code: value,
                    title: 'Phường/Xã'
                },
                success: function (response) {
                    districtWrapper.after(response);
                    select_address();
                }
            });
        }
    });
}