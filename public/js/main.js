$(document).ready(function() {
    
    // function for setting the width of the content part
/*  let setRightWidth = function() {
    let windowWidth = $(window).width();
    let leftDiv = $('.main-nav').outerWidth();
    $('.main-content').width(windowWidth-leftDiv-2);
    };
    setRightWidth();
*/
    // function for setting the height of the left main menu

    /*let menuHeight = function() {
        let winHeight = $(window).height();
        let finderHeight = $('.main-finder').outerHeight();
        let mainContentHeight = $('.main-content').height();
        let lastMenuItemOffset = $('.menu-item:last-child').offset().top + 
        $('.menu-item:last-child').height();
        $('.main-nav').css('min-height', lastMenuItemOffset - finderHeight);
        if (window.location.pathname == '/management.html') {
            let vertMenuHeight = $('.vertical-menu').height();
            $('.main-nav').height(vertMenuHeight);
        } else {
            if (mainContentHeight >= winHeight) {
                $('.main-nav').height(mainContentHeight);
            } else {
                $('.main-nav').height(winHeight - finderHeight);
            }
        }
    };*/

// function for setting the height of the vertical menu in management page

    /*let verticalMenuHeight = function() {
        let lastMenuItemOffset = $('.menu-item:last-child').offset().top + 
        $('.menu-item:last-child').height();
        let winHeight = $(window).height();
        let finderHeight = $('.main-finder').outerHeight();
        let mainContentHeight = $('.vertical-tabs__container').height();
        $('.vertical-menu').css('min-height', lastMenuItemOffset - finderHeight);
        if (mainContentHeight >= winHeight) {
            $('.vertical-menu').height(mainContentHeight);
        } else {
            $('.vertical-menu').height(winHeight - finderHeight);
        }
    };*/

    /*if (window.location.pathname == '/management.html') {
        verticalMenuHeight();
    }

    menuHeight();*/

  $('.multi-item-carousel').carousel({
  interval: false
  });

    // for every slide in carousel, copy the next slide's item in the slide.
    // Do the same for the next, next item.
    $('.multi-item-carousel .item').each(function(){
      var next = $(this).next();
      if (!next.length) {
        next = $(this).siblings(':first');
      }
      next.children(':first-child').clone().appendTo($(this));
      
      if (next.next().length>0) {
        next.next().children(':first-child').clone().appendTo($(this));
      } else {
        $(this).siblings(':first').children(':first-child').clone().appendTo($(this));
      }
    });

    var $me = $( '.star-ctr' );

   var $bg, $fg, wd, cc, ini;

   $bg = $me.children( 'ul' );
   $fg = $bg.clone().addClass( 'star-fg' ).css( 'width', 0 ).appendTo( $me );
   $bg.addClass( 'star-bg' );

   function initialize() {

      ini = true;

      // How many rating elements
      cc = $bg.children().length;

      // Total width of the bar
      wd = $bg.width();

   }

   $me.mousemove(function( e ) {
      
      // Do once, deferred since fonts might not
      // be loaded so the calcs will be wrong
      if ( !ini ) initialize();

      var dt, vl;

      // Where is the mouse relative to the left
      // side of the bar?
      dt = e.pageX - $me.offset().left;
      vl = Math.round( dt / wd * cc * 10 ) / 10;

      $me.attr( 'data-value', vl );
      $fg.css( 'width', Math.round( dt )+'px' );

   }).click(function() {

       // Grab value
       //alert( $( this ).attr( 'data-value' ) );

       return false;
   });
  
    $('[data-toggle="popover"]').popover();
    $("[data-toggle=popover]").popover({html:true});

    let mainMenuHeight = function() {
        let winHeight = $(window).height();
        $('.main-nav').css('max-height', winHeight-50);
        $('.main-nav').css('min-height', winHeight-50);
    };
    mainMenuHeight();

    let managementMenuHeight = function() {
        let winHeight = $(window).height();
        $('.vertical-menu').css('max-height', winHeight-50);
        $('.vertical-menu').css('min-height', winHeight-50);
        $('.vertical-menu__wrapper').css('max-height', winHeight-50);
        $('.vertical-menu__wrapper').css('min-height', winHeight-50);
    };
    if (window.location.pathname == '/management.html' || window.location.pathname == '/settings.html') {
        managementMenuHeight();
    }

  let chartObj = {
    chart: {
        type: 'bar',
    style: {
            fontFamily: 'Gost'
        }
    },
    title: {
        text: null
    },
    xAxis: {
        categories: ['Новая Заявка', 'Недозвон', 'Выявление потребностей', 'Проведена не до конца', 'Квалификация пройдена','Закрыто и не реализовано'],
        opposite: true,
     labels: {
          useHTML:true,
                style: {
                    fontSize:'20px',
                    width: '150px',
                    color: '#344965'
                },
                step: 1
            }
        },
    yAxis: {
        reversed: true,
        visible: false,
        min: 0,
        max: 150
    },
    plotOptions: {
        bar: {
            dataLabels: {
                enabled: true
            }
        },
        series: {
          colorByPoint: true,
          colors: ['#e71b1c','#c4222d','#a7393e','#95425c','#573a66','#234680']
        },
        column: {
            grouping: false,
            shadow: false
        }
    },
    legend: {
        enabled: false
    },
    credits: {
        enabled: false
    },
    series: [
    {},
    {
        data: [120, 120, 120, 120, 120, 120],
        enableMouseTracking: false,
        pointWidth:10,
    dataLabels: {
      className: 'highlight',
      format: '0 Д.',
      enabled: true,
      style: {
        color: '#344965',
        textOutline: false,
        fontSize:'20px'
      }
    }
    },
    {
        data: [{y: 120, color: 'white'},{y: 120, color: 'white'},{y: 90, color: 'white'},{y: 120, color: 'white'},{y: 120, color: 'white'},{y: 120, color: 'white'}],
        dataLabels: {enabled: false},
        enableMouseTracking: false,
        grouping: false
    },
   
    {
        data: [98, 75, 65, 63, 53, 46],
        enableMouseTracking: false,
        grouping: false,
    dataLabels: {
      className: 'highlight',
      format: '{y}%',
      enabled: true,
      style: {
        color: '#344965',
        textOutline: false,
        fontSize:'20px'
      }
    }
    }]
  };

  let chartObjPie = {
    chart: {
            plotBackgroundColor: null,
            plotBorderWidth: null,
            plotShadow: false,
            type: 'pie'
        },
        title: {
            text: 'Доля категории товаров в производстве'
        },
        tooltip: {
            pointFormat: '{series.name}: <b>{point.percentage:.1f}%</b>'
        },
        plotOptions: {
            pie: {
                allowPointSelect: true,
                cursor: 'pointer',
                dataLabels: {
                    enabled: false
                },
                showInLegend: true
            }
        },
        series: [{
            name: 'Brands',
          colorByPoint: true,
          colors: ['#502fb2','#6e2c96','#85297e','#9e2666','#b5224e','#cd1f38','#e71b1c'],
            data: [{
                name: 'Товар1',
                y: 30
            }, {
                name: 'Товар2',
                y: 20
            }, {
                name: 'Товар3',
                y: 20
            }, {
                name: 'Товар4',
                y: 10
            }, {
                name: 'Товар5',
                y: 10
            }, {
                name: 'Товар6',
                y: 5
            }, {
                name: 'Товар7',
                y: 5
            }]
        }]
  };
  let chartObjArea = {
    chart: {
        type: 'area'
    },
    title: {
        text: null
    },
    xAxis: {
        categories: ['Dec', 'Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun', 'Jul', 'Aug', 'Sen', 'Oct', 'Nov']
    },
    yAxis: {
        title: {
        text: null
    }
    },

    plotOptions: {
        series: {
            lineColor: 'red',
            fillColor: {
                linearGradient: [0, 0, 0, 200],
                stops: [
                    [0, '#4257b4'],
                    [1, '#fff']
                ]
            }
        }
    },
    credits: {
        enabled: false
    },
    legend: {
        enabled: false
    },
    series: [{
        name: 'Загруженность',
        data: [9000, 12000, 14000, 12000, 21000, 16000, 12000, 20000, 30000, 38000, 35000, 28000]
    }]
  };

  let chartObjCol = {

    chart: {
        type: 'column'
    },
    title: {
        text: null
    },
    xAxis: {
        categories: [
            '1',
            '2',
            '3',
            '4'
        ],
        crosshair: true
    },
    yAxis: {
        min: 0,
        title: {
            text: null
        }
    },
    plotOptions: {
        column: {
            pointPadding: 0,
            borderWidth: 0
        }
    },
    series: [{
        name: ' ',
        data: [15, 38, 61],
        color: '#e22122'

    }, {
        name: ' ',
        data: [20, 28, 31],
        color: '#1c37e8'

    }, {
        name: ' ',
        data: [10, 31, 50],
        color: '#9f2b42'

    }, {
        name: ' ',
        data: [19, 41, 89],
        color: '#5a3f58'

    }]

  };


    // function for creating the tabs in the content part
  
  let tabFunction = function(selector) {
      $(selector).on('click', function(e)  {
        let currentAttrValue = $(this).attr('href');
 
        // Show/Hide Tabs
        $(currentAttrValue).show().siblings().hide();
        // Change/remove current tab to active

        $(this).parent().siblings().find('.tab-link--active').removeClass('tab-link--active');
        $(this).addClass('tab-link--active');
        
        if (selector == '#analytics-tab .tab-link') {
            $(this).parent().siblings().find('.tab-link--active-red').removeClass('tab-link--active-red');
            $(this).removeClass('tab-link--active');
            $(this).addClass('tab-link--active-red');
        }
        if (selector == '#good-tab .tab-link') {
            $(this).parent().siblings().find('.tab-link--active-red').removeClass('tab-link--active-red');
            $(this).removeClass('tab-link--active');
            $(this).addClass('tab-link--active-red');
        }

        e.preventDefault();
    });  
  };
<<<<<<< HEAD
  $('.menu-item__link').on('click', function(e)  {
    $(this).parent().siblings().find('.text--menu--selected').removeClass('text--menu--selected');
    $(this).addClass('text--menu--selected');
    e.preventDefault();
  }); 
=======
>>>>>>> ee0c3e1747b651db2b8fe13d3db6e5ce95ea3741

  tabFunction('.tab-link');
  tabFunction('#analytics-tab .tab-link');
  tabFunction('#good-tab .tab-link');

    // function for creating date links
  let dateChangeFunction = function(selector) {
    $(selector).on('click', function(event) {
      event.preventDefault();
      var target = event.currentTarget;
      $(target).parent().siblings().find('.date-change__link--active').removeClass('date-change__link--active');
        $(target).addClass('date-change__link--active');

        if (selector == '#analytics-tab .date-change__link') {
          $(target).parent().siblings().find('.date-change__link--active-red').removeClass('date-change__link--active-red');
          $(target).addClass('date-change__link--active-red');
          $(target).removeClass('date-change__link--active');
        }
    });
  };

  dateChangeFunction('.date-change__link');
  dateChangeFunction('#analytics-tab .date-change__link');

    // management page vertical tabs function

    $('.vertical-nav__link').on('click', function(event) {
        event.preventDefault();
        let currentAttrValue = $(this).attr('href');
        $(currentAttrValue).show().siblings().hide();

        $(this).parent().siblings().find('.vertical-nav__link--active').removeClass('vertical-nav__link--active');
        $(this).addClass('vertical-nav__link--active');
        /*if (window.location.pathname == '/management.html') {
            verticalMenuHeight();
        }
        menuHeight();*/
    });

    // settings page form styles

    $('.settings-form__open-button').on('click', function(){
        if ($('.settings-form__pay-wrapper').is(':visible')) {
            $('.settings-form__pay-wrapper').slideUp(500);
        } else {
            $('.settings-form__pay-wrapper').slideDown(500);
        }
    });

    $('.settings-form__add-button').on('click', function(){
        let inputs = Array.from(document.getElementsByClassName('settings-form__pay-input'));
        let inputData = [];
        inputs.forEach(function(item, i, arr){
            inputData.push($(item).val());
            $(item).val('');
        });
        $('#settings-pay-info').html('');
        $('#settings-pay-info').html(inputData.join(';'));
    });

    let setDropdown = function(selector) {
        if ($(selector).is(':visible')) {
            $(selector).slideUp(300);
        } else {
            $(selector).slideDown(300);
        }
    };

    $('.arrow-down').on('click', function(){
        setDropdown('table .dropdown__content');
    });

    $('.settings-roles__table-adding').on('click', function(){
        setDropdown('#drop-add');
    });

    $('.settings-roles__table-status').on('click', function(){
        setDropdown('#drop-add-modal');
    });

    $('.settings-roles__table-con').on('click', function(){
        setDropdown('#drop-add-con');
    });

    $('.settings-roles__table-cat1').on('click', function(){
        setDropdown('#drop-add-cat1');
    });

    $('.settings-roles__table-cat2').on('click', function(){
        setDropdown('#drop-add-cat2');
    });


    $('.settings-roles__table-cat3').on('click', function(){
        setDropdown('#drop-add-cat3');
    });


    $('.settings-roles__table-cat4').on('click', function(){
        setDropdown('#drop-add-cat4');
    });


    $('.settings-roles__table-cat5').on('click', function(){
        setDropdown('#drop-add-cat5');
    });

    $('.settings-roles__table-cat6').on('click', function(){
        setDropdown('#drop-add-cat6');
    });

    $('.settings-roles__table-import').on('click', function(){
        setDropdown('#drop-add-im');
    });

    $('.settings-roles__table-hide').on('click', function(){
        setDropdown('#drop-add-modal-r');
    });
    $('.dropdown-btn--filter').on('click', function() {
      setDropdown('#dropdown__content--filter');
    });

    $('.dropdown-btn--factory').on('click', function() {
      setDropdown('#dropdown__content--factory');
    });

    if (window.location.pathname == '/filesForAida/shop/category.php') {
    $( "#slider-range" ).slider({
      range: true,
      min: 0,
      max: 500,
      values: [ 100, 300 ],
      slide: function( event, ui ) {
        $( "#amount" ).html( "$" + ui.values[ 0 ] + " - $" + ui.values[ 1 ] );
        $( "#amount1" ).val(ui.values[ 0 ]);
        $( "#amount2" ).val(ui.values[ 1 ]);
      }
    });

    $( "#amount" ).html( "$" + $( "#slider-range" ).slider( "values", 0 ) +
     " - $" + $( "#slider-range" ).slider( "values", 1 ) );
    }

    if (window.location.pathname == '/filesForAida/factory/calculations.php') {
    autosize(document.getElementById("note"));
    }
    if (window.location.pathname == '/filesForAida/factory/analytics.php') {
    Highcharts.chart('barChart1', chartObj); 
    }
    if (window.location.pathname == '/filesForAida/factory/index.php') {
    Highcharts.chart('first_pie', chartObjPie); 
    }
    if (window.location.pathname == '/filesForAida/factory/index.php') {
    Highcharts.chart('first_area', chartObjArea);
    }
    if (window.location.pathname == '/filesForAida/factory/index.php') {
    Highcharts.chart('first_col', chartObjCol);
    }

    /*let dragStatus = false;
    let draggable;

    $('.order-block__item').on('mousedown',function(event) {
      let initialCoord = $(this).offset();
      $(this).parents('.order-block').css('position', 'static');
      dragStatus = true;
      draggable = this;
      $(this).css({
       'position':'absolute',
       left: initialCoord.left,
       top: initialCoord.top 
      });
      let written = false;
      var diffX, diffY;
      $(this).bind('mousemove', function(event){
        if (!written) {
          diffY = event.clientY - initialCoord.top;
          diffX = event.clientX - initialCoord.left;
          written = true;
        }
        $(this).css({
          top: event.clientY - diffY,
          left: event.clientX - diffX
        });
      });
    });

    $(document).on('mouseup',function() {
      if (window.location.pathname == '/orders.html' || window.location.pathname == '/calculations.html') {
          console.log('bye');
          $('.order-block__item').unbind('mousemove');
          dragStatus = false;
          // $('.order-block__list').css('border', '2px solid #344965');
      }
    });

    $('.order-block__list').on('mouseenter', function(){
      console.log("here");
      if (dragStatus) {
        // $(this).css('border','3px solid green');
        $(draggable).unbind('mousemove').css('position', 'static');
        $(this).append(draggable);
      }
    });*/

    if (window.location.pathname == '/filesForAida/factory/orders.php' || window.location.pathname == '/filesForAida/factory/calculations.php') {
    DragManager.onDragCancel = function(dragObject) {
      dragObject.avatar.rollback();
    };

    DragManager.onDragEnd = function(dragObject, dropElem) {
      let newDrag = dragObject.elem;
      $(newDrag).css({
        position: 'static',
        zIndex: '0'
      });
      $(dropElem).append(newDrag);
    };
  }

  let setTableManufacture = function(selector) {
    let data1 = ['data5','data6','data7'];
    let data2 = ['data8','data9','data10'];
    if ($(selector).html().toUpperCase() == 'сырье'.toUpperCase()) {
      for (var i = 3; i > 0; i--) {
        $('.table__row:last-child .table__data:nth-child('+(7-i+1)+')').html(data1[3-i]);
      }
    } else if ($(selector).html().toUpperCase() == 'товар'.toUpperCase()) {
      for (var i = 3; i > 0; i--) {
        $('.table__row:last-child .table__data:nth-child('+(7-i+1)+')').html(data2[3-i]);
      }
    }
  };

  if (window.location.pathname == '/filesForAida/factory/manufacture.html') {
    setTableManufacture('.table__link:first-child');
  }

  $('.table__link').on('click', function(){
    console.log("good");
    setTableManufacture(this);
  });

 $( function() {
    $( "#dialog" ).dialog({
        autoOpen: false,
        modal: true,
        width: 600,
        open: function() {
        $('.ui-widget-overlay').addClass('custom-overlay').bind('click', function() {
                $("#dialog").dialog('close');})
        },
        close: function() {
            $('.ui-widget-overlay').removeClass('custom-overlay');
        } 
    });

    $( "#dialog_reg" ).dialog({
        autoOpen: false,
        modal: true,
        width: 900,
        open: function() {
        $('.ui-widget-overlay').addClass('custom-overlay').bind('click', function() {
                $("#dialog_reg").dialog('close');})
        },
        close: function() {
            $('.ui-widget-overlay').removeClass('custom-overlay');
        } 
    });
 
    $( "#opener" ).on( "click", function() {
        $( "#dialog" ).dialog( "open" );
    });

    $( "#opener_reg" ).on( "click", function() {
        $( "#dialog_reg" ).dialog( "open" );
    });

  });

});

