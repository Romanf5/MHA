(function ($) {

    /********* Slick *********/

    $('.slider-holder').slick({
        infinite: true,
        speed: 300,
        //autoplay: true,
        adaptiveHeight: true,
        prevArrow: $(".prew"),
        nextArrow: $(".next"),
        fade: true,
        cssEase: 'linear'
    });

    $('.images-holder').slick({
        slidesToShow: 4,
        slidesToScroll: 1,
        prevArrow: $(".previous"),
        nextArrow: $(".next-slide"),
        autoplay: false,
        autoplaySpeed: 2000,
        responsive: [
            {
                breakpoint: 1601,
                settings: {
                    slidesToShow: 3
                }
            },
            {
                breakpoint: 731,
                settings: {
                    slidesToShow: 2
                }
            },
            {
                breakpoint: 601,
                settings: {
                    slidesToShow: 1
                }
            }
        ]
    });

    /********* Full page plugin *********/

    /*//Set each section's height equals to the window height
    //$('#home').height($(window).height());
    /!*set the class 'active' to the first element
     this will serve as our indicator*!/
    $('section').first().addClass('active');

    function scrollDown() {
        var timer = setTimeout(function () {
            /!* animate the scrollTop by passing
            the elements offset top value *!/
            $('body, html').animate({
                scrollTop: next.offset().top
            }, 'slow');

            // move the indicator 'active' class
            next.addClass('active')
                .siblings().removeClass('active');

            clearTimeout(timer);
        }, 800);
    }

    /!* handle the mousewheel event together with
     DOMMouseScroll to work on cross browser *!/
    $(document).on('mousewheel DOMMouseScroll', function (e) {
        e.preventDefault();//prevent the default mousewheel scrolling
        var active = $('section.active');
        //get the delta to determine the mousewheel scrol UP and DOWN
        var delta = e.originalEvent.detail < 0 || e.originalEvent.wheelDelta > 0 ? 1 : -1;

        //if the delta value is negative, the user is scrolling down
        if (delta < 0) {
            //mousewheel down handler
            next = active.next();
            //check if the next section exist and animate the anchoring
            if (next.length) {
                /!*setTimeout is here to prevent the scrolling animation
                 to jump to the topmost or bottom when
                 the user scrolled very fast.*!/
                scrollDown();
            } else{
                // $(document).unbind('mousewheel DOMMouseScroll', function (e) {
                //     e.preventDefault()
                // })
            }
        } else {
            //mousewheel up handler
            /!*similar logic to the mousewheel down handler
            except that we are animate the anchoring
            to the previous sibling element*!/
            prev = active.prev();

            if (prev.length) {
                var timer = setTimeout(function () {
                    $('body, html').animate({
                        scrollTop: prev.offset().top
                    }, 'slow');

                    prev.addClass('active')
                        .siblings().removeClass('active');

                    clearTimeout(timer);
                }, 800);
            }
        }
    });*/

    /********* Auto expand textarea *********/

    $.fn.autogrow = function() {
        return this.each(function() {
            var textarea = this;
            $.fn.autogrow.resize(textarea);
            $(textarea).focus(function() {
                textarea.interval = setInterval(function() {
                    $.fn.autogrow.resize(textarea);
                }, 500);
            }).blur(function() {
                clearInterval(textarea.interval);
            });
        });
    };
    $.fn.autogrow.resize = function(textarea) {
        var lineHeight = parseInt($(textarea).css('line-height'), 10);
        var lines = textarea.value.split('\n');
        var columns = textarea.cols;
        var lineCount = 0;
        $.each(lines, function() {
            lineCount += Math.ceil(this.length / columns) || 1;
        });
        var height = lineHeight * (lineCount + 1);
        $(textarea).css('height', height);
    };

    $('.wpcf7-textarea').autogrow();

    /********* Sort table *********/

    function sortTable(table, order) {
        var asc   = order === 'asc',
            tbody = table.find('tbody');

        tbody.find('tr:not(.head)').sort(function(a, b) {
            if (asc) {
                return $('td:first', a).text().localeCompare($('td:first', b).text());
            } else {
                return $('td:first', b).text().localeCompare($('td:first', a).text());
            }
        }).appendTo(tbody);
    }

    /********* Animated scroll *********/

    jQuery('a[href^="#"]').bind('click.smoothscroll',function (e) {
        e.preventDefault();

        var target = this.hash,
            $target = $(target);

        jQuery('html, body').stop().animate({
            'scrollTop': $target.offset().top
        }, 600, 'swing', function () {
            window.location.hash = target;
        });
    });

    /********* Burger menu *********/

    $('.responsive-button').click(function () {
        $('.main-nav').toggleClass('menu-open');
        $(this).toggleClass('cross');
        $('#overlay').toggleClass('active');
        $('body').toggleClass('overflow');
    });

    $('#overlay').click(function () {
        $(this).removeClass('active');
        $('.responsive-button').removeClass('cross');
        $('body').removeClass('overflow');
        $('.main-nav').removeClass('menu-open');
    });

    /********* Window resize responsive *********/

    $(window).resize(function () {
        if ($(window).innerWidth() > 768) {
            $('body').removeClass('overflow');
            $('.main-nav').removeClass('menu-open');
            $('.responsive-button').removeClass('cross');
            $('#overlay').removeClass('active');
        }
    });

    /********* Contact form *********/

    $('.form-wrapper .first-button').click(function (e) {
        e.preventDefault();
        var parent = $(this).parent();
        $('.input-wrapper').addClass('visible');
        $('.form-text').remove();
        $(this).remove();
        $('.wpcf7-submit').addClass('block');
        $('.submit-button').addClass('block');
    });

    $('#open-form').click(function (e) {
        e.preventDefault();
        $('.input-wrapper').addClass('visible');
        $('.first-button').remove();
        $('.form-text').remove();
        $('.wpcf7-submit').addClass('block');
        $('.submit-button').addClass('block');
    });

    $(".wpcf7").on('wpcf7invalid', function (e) {
        e.preventDefault();
        $('.alert-text').addClass('block');
    });

    $(".wpcf7 ").on('wpcf7mailsent', function (e) {
        e.preventDefault();
        $('.content').addClass('unvisible');
        $('.content-success').addClass('active');
    });

    $('.wpcf7-form').attr("autocomplete", "off");

    /********* Sticky header *********/

    var windowHeight = ($(window).height()) / 4;

    $(window).on('scroll', function () {
        if ($(this).scrollTop() >= windowHeight) {
            $('.logo-link img').addClass('sticky')
        } else {
            $('.logo-link img').removeClass('sticky')
        }
    });

    /********* Gallery *********/

    var selectedImg = $('.image');
    var random = Math.floor(Math.random() * (selectedImg.length - 0 - 1)) + 0;
    var randomImage = selectedImg[random];
    var targetBlock = $('.target-block__image');
    var link = $('#target-link');
    var container = $('.slider-image');
    var text = $('#target-event');
    $(targetBlock).css('background-image', 'url(' + $(randomImage).attr('src') + ')');
    $('#target-event').html($(randomImage).attr('data-event'));
    $('#target-date').html($(randomImage).attr('data-date'));
    link.attr('download', text.text().split(' ')[0]);
    link.attr('href', $(randomImage).attr('src'));

    $(container).on('click', function () {
        var $this = $(this);
        var image = $this.find("img").attr('src');
        var thisEvent = $this.find("img").attr('data-event');
        var thisDate = $this.find("img").attr('data-date');
        $(link).attr('href', image);
        var imageName = thisEvent.split(' ')[0];
        link.attr('download', imageName);

        $('#target-event').html(thisEvent);
        $('#target-date').html(thisDate);
        $(targetBlock).css('background-image', 'url(' + image + ')');
    });

    $('#clicked').on('click', function () {
        $('.hidden-block').slideToggle("slow");
    });

    $(function () {
        $("#clicked").click(function () {
            $(this).find('span').text(function (i, text) {
                return text === "read full bio" ? "hide full bio" : "read full bio";
            });
            $(this).find('i').toggleClass('spin');
        });
    });

    /********* Toggle table arrow *********/

    $(function () {
        $("#table-toggle").click(function () {
            $(this).find('span').text(function (i, text) {
                return text === "full table" ? "hide table" : "full table";
            });
            $(this).find('i').toggleClass('spin');
        });
    });

    $('#table-toggle').on('click', function () {
        $('.hidden').slideToggle("fast");
    });

    /********* Ajax *********/
    var table = $('#tabel-test');
    var testString = '';
    var newArr = [];
    var ownerStr = '';
    var ownerTable = $('#owner-table');

    // Horse Roster Information

    $.ajax({
        type: 'GET',
        url: 'https://www.tlore.net/webservices/data.cfc?method=getRosterData&req=hennig8102&tid=112',
        dataType: 'json',
        success: function (data) {
            var arr = data.horseRoster;  // for testing only
            //console.log(arr);
            jQuery.each(arr, function (index, item) {
                testString = '<tr class="test-content">\n' +
                    '         <td>' + item.name + '</td>\n' +
                    '         <td>' + item.current_location + '</td>\n' +
                    '         <td>' + item.sex + '</td>\n' +
                    '         <td>' + item.sire + '</td>\n' +
                    '         <td>' + item.current_location_abbr + '</td>\n' +
                    '         <td>' + item.birth_year + '</td>\n' +
                    '         <td>' + item.color + '</td>\n' +
                    '         <td>' + item.dam + '</td>\n' +
                    '         <td>' + item.dam_dam + '</td>\n' +
                    '         <td>' + item.dam_sire + '</td>\n' +
                    '         <td>' + item.sire_dam + '</td>\n' +
                    '         <td>' + item.sire_sire + '</td>\n' +
                    '       </tr>';
                table.append(testString);
                var ownersArr = item.horseOwners;
                //console.log(item);
                jQuery.each(ownersArr, function (index, item) {
                    ownerStr = '<tr class="test-content">\n' +
                        '         <td>' + item.fullname + '</td>\n' +
                        '         <td>' + item.city + '</td>\n' +
                        '         <td>' + item.company_name + '</td>\n' +
                        '         <td>' + item.percent_ownership + '</td>\n' +
                        '         <td>' + item.race_entry_name + '</td>\n' +
                        '       </tr>';
                    ownerTable.append(ownerStr);
                });
            });
        },
        error: function (error) {
            console.log(error);
        }
    });

    // Race Information

    var raceInformation = $('#race-information');
    var content = '';
    $.ajax({
        type: 'GET',
        url: 'https://www.tlore.net/webservices/data.cfc?method=getRaceData&req=hennig8102&tid=112&date1=06/24/2018&date2=7/24/2018',
        dataType: 'json',
        success: function (data) {
            var arr = data.Races;  // for testing only
            //console.log(arr);
            jQuery.each(arr, function (index, item) {
                var arr2 = item.RaceInformation;
                var date = item.RACE_DATE.slice(0, 10);
                var year = date.slice(2, 4);// year
                var month = date.slice(5, 7);// month
                var day = date.slice(8, 10);// day
                content = '<tr class="test-content">\n' +
                    '         <td class="date">' + month + '/' + day  + '/' + year + '</td><td>\n';
                jQuery.each(arr2, function (index2, item2) {
                    content += '<div class="horse-name">' + item2.NAME + '</div>';
                });

                content+='</td>';

                content += '<td>\n';
                jQuery.each(arr2, function (index3, item3) {
                    content += '<div>' + item3.ABBR + '</div>'
                });

                content+='</td>';

                content += '<td>\n';
                jQuery.each(arr2, function (index7, item7) {
                    content += '<div class="type">' + item7.RACE_TYPE + '</div>'
                });

                content+='</td>';

                content += '<td>\n';
                jQuery.each(arr2, function (index9, item9) {
                    content += '<div>' + item9.SURFACE_TYPE + '</div>'
                });

                content+='</td>';

                content += '<td>\n';
                jQuery.each(arr2, function (index4, item4) {
                    content += '<div>' + item4.PLACE + '</div>'
                });

                content+='</td>';

                content += '<td>\n';
                jQuery.each(arr2, function (index8, item8) {
                    content += '<div>' + item8.RACE_NUMBER + '</div>'
                });

                content+='</td>';

                content += '<td>\n';
                jQuery.each(arr2, function (index6, item6) {
                    content += '<div class="name">' + item6.JOCKEY_FIRST + ' ' +item6.JOCKEY_LAST + '</div>'
                });

                content+='</td>';

                content += '<td>\n';
                jQuery.each(arr2, function (index5, item5) {
                    content += '<div>' + '$' + item5.EARNINGS + '</div>'
                });

                content+='</td>';

                content+='</td></tr>';

                raceInformation.append(content);

                sortTable($('#race-information'),'desc');
            });

            var emptyDivs = $('#race-information tr td div').filter(function() {
                return $.trim($(this).text()) === "";
            });
            emptyDivs.remove();
        },
        error: function (error) {
            console.log(error);
        }
    });

    // Workout Information

    var workoutTable = $('#workout');
    var workoutContent = '';
    $.ajax({
        type: 'GET',
        url: 'https://www.tlore.net/webservices/data.cfc?method=getWorkoutData&req=hennig8102&tid=112&date1=07/20/2018&date2=7/25/2018&last=0',
        dataType: 'json',
        success: function(data){
            console.log(data);
            var arr = data.Workouts;
            //console.log(arr);
            jQuery.each(arr, function (index, item) {
                var workoutArr = item.WorkoutDetail;
                console.log(workoutArr);
                workoutContent = '<tr class="test-content">\n' +
                    '<td class="name-item">' + item.NAME + '</td><td>\n';
                jQuery.each(workoutArr, function (index2, item2) {
                    var date = item2.WORKOUT_DATE.slice(0, 10);
                    var year = date.slice(2, 4);// year
                    var month = date.slice(5, 7);// month
                    var day = date.slice(8, 10);// day
                    workoutContent += '<div>' + month + '/' + day  + '/' + year + '</div>'
                });

                workoutContent+='</td>';

                workoutContent += '<td>\n';
                jQuery.each(workoutArr, function (index3, item3) {
                    workoutContent += '<div>' + item3.LOCATION + '</div>'
                });

                workoutContent+='</td>';

                workoutContent += '<td>\n';
                jQuery.each(workoutArr, function (index4, item4) {
                    workoutContent += '<div>' + item4.SURFACE_CONDITION + '</div>'
                });

                workoutContent+='</td>';

                workoutContent += '<td>\n';
                jQuery.each(workoutArr, function (index5, item5) {
                    workoutContent += '<div>' + item5.TIME + '</div>'
                });

                workoutContent+='</td>';

                workoutContent += '<td>\n';
                jQuery.each(workoutArr, function (index6, item6) {
                    workoutContent += '<div>' + item6.DISTANCE + '</div>'
                });

                workoutContent += '<td>\n';
                jQuery.each(workoutArr, function (index7, item7) {
                    workoutContent += '<div>' + item7.ACTIVITY_2 + '</div>'
                });

                workoutContent+='</td>';

                workoutContent+='</td></tr>';
                workoutTable.append(workoutContent);

                //sortTable($('#workout'),'desc');
            })
        },
        error: function(error){
            console.log(error);
        }
    });

    // YTD Information

    var informationTable = $('#information');
    var informationContent = '';
    $.ajax({
        type: 'GET',
        url: 'https://www.tlore.net/webservices/data.cfc?method=getYTDData&req=hennig8102&tid=112',
        dataType: 'json',
        success: function(data){
            var arr = data.YTD;
            //console.log(arr);
            jQuery.each(arr, function (index, item) {
                var secondArr = item.YTD_Detail;
                //console.log(secondArr);
                informationContent = '<tr class="test-content">\n' +
                    '<td>' + item.YTD_YEAR + '</td><td>\n'
                jQuery.each(secondArr, function (index2, item2) {
                    informationContent += '<div>' + item2.STARTS + '</div>';
                });

                informationContent+='</td>';

                informationContent += '<td>\n';

                jQuery.each(secondArr, function (index3, item3) {
                    informationContent += '<div>' + item3.WINS + '</div>';
                });

                informationContent+='</td>';

                informationContent += '<td>\n';

                jQuery.each(secondArr, function (index4, item4) {
                    informationContent += '<div>' + item4.SECONDS + '</div>';
                });

                informationContent+='</td>';

                informationContent += '<td>\n';

                jQuery.each(secondArr, function (index5, item5) {
                    informationContent += '<div>' + item5.THIRDS + '</div>';
                });

                informationContent+='</td>';

                informationContent += '<td>\n';

                jQuery.each(secondArr, function (index6, item6) {
                    informationContent += '<div>' + item6.PERCENT_WIN + '</div>';
                });

                informationContent+='</td>';

                informationContent += '<td>\n';

                jQuery.each(secondArr, function (index7, item7) {
                    informationContent += '<div>' + item7.TOT_EARNINGS + '</div>';
                });

                informationContent+='</td>';

                informationContent+='</td></tr>';

                informationTable.append(informationContent);
            })
        },
        error: function(error){
            console.log(error);
        }
    });

    // Owner Information

    var onwerInfo = $('#owner');
    var ownerContent = '';
    $.ajax({
        type: 'GET',
        url: 'https://www.tlore.net/webservices/data.cfc?method=getOwnerData&req=hennig8102&tid=112',
        dataType: 'json',
        success: function(data){
            var arr = data.Owners;
            //console.log(arr);
            jQuery.each(arr, function (index, item) {
                var secondArr = item.OwnerHorses;

                ownerContent = '<tr class="test-content">\n' +
                    '<td>' + item.FULLNAME + '</td>\n'+
                    '         <td>' + item.CITY + '</td>\n' +
                    '         <td>' + item.COMPANY_NAME + '</td><td>\n';
                jQuery.each(secondArr, function (index2, item2) {
                    ownerContent += '<div>' + item2.NAME + '</div>'
                });

                ownerContent+='</td>';

                ownerContent += '<td>\n';
                jQuery.each(secondArr, function (index3, item3) {
                    ownerContent += '<div>' + item3.LOCATION + '</div>'
                });

                ownerContent+='</td>';

                ownerContent += '<td>\n';
                jQuery.each(secondArr, function (index4, item4) {
                    ownerContent += '<div>' + item4.PERCENT_OWNERSHIP + '</div>'
                });

                ownerContent+='</td>';

                ownerContent += '<td>\n';
                jQuery.each(secondArr, function (index5, item5) {
                    ownerContent += '<div>' + item5.BIRTH_YEAR + '</div>'
                });

                ownerContent+='</td>';

                ownerContent+='</td></tr>';
                onwerInfo.append(ownerContent);
            })
        },
        error: function(error){
            console.log(error);
        }
    });

    // Statistic

    var statTable = $('#target-table');
    var statString = '';
    $.ajax({
        type: 'GET',
        url: 'https://www.tlore.net/webservices/data.cfc?method=getYTDData&req=hennig8102&tid=112',
        dataType: 'json',
        success: function(data){
            var arr = data.YTD;
            //console.log(arr);
            jQuery.each(arr, function (index, item) {
                var secondArr = item.YTD_Detail;
                jQuery.each(secondArr, function (index, item) {
                    statString = '<tr>\n' +
                        '         <td>' + item.STARTS + '</td>\n' +
                        '         <td>' + item.WINS + '</td>\n' +
                        '         <td>' + item.SECONDS + '</td>\n' +
                        '         <td>' + item.THIRDS + '</td>\n' +
                        '         <td>' + item.TOT_EARNINGS + '</td>\n' +
                        '       </tr>';
                    statTable.append(statString);
                });
            })
        },
        error: function(error){
            console.log(error);
        }
    });

    // Future races

    var futureTable = $('#future-races');
    var futureString = '';
    $.ajax({
        type: 'GET',
        url: 'https://www.tlore.net/webservices/data.cfc?method=getRaceData&req=hennig8102&tid=112&status=entry',
        dataType: 'json',
        success: function(data){
            //console.log(data);
            var arr = data.RaceEntries;

            jQuery.each(arr, function (index, item) {
                var arr2 = item.RaceEntryInformation;
                var date = item.RACE_DATE.slice(0, 10);
                var year = date.slice(2, 4);// year
                var month = date.slice(5, 7);// month
                var day = date.slice(8, 10);// day
                futureString = '<tr class="test-content">\n' +
                    '         <td class="date" data-field-type="date">' + month + '/' + day  + '/' + year + '</td><td>\n';
                jQuery.each(arr2, function (index2, item2) {
                    futureString += '<div class="horse-name">' + item2.NAME + '</div>';
                });

                futureString+='</td>';

                futureString += '<td>\n';
                jQuery.each(arr2, function (index3, item3) {
                    futureString += '<div>' + item3.ABBR + '</div>'
                });

                futureString+='</td>';

                futureString += '<td>\n';
                jQuery.each(arr2, function (index7, item7) {
                    futureString += '<div class="type">' + item7.RACE_TYPE + '</div>'
                });

                futureString+='</td>';

                futureString += '<td>\n';
                jQuery.each(arr2, function (index9, item9) {
                    futureString += '<div>' + item9.SURFACE_TYPE + '</div>'
                });

                futureString+='</td>';

                futureString += '<td>\n';
                jQuery.each(arr2, function (index4, item4) {
                    futureString += '<div>' + item4.RACE_STATUS + '</div>'
                });

                futureString+='</td>';

                futureString += '<td>\n';
                jQuery.each(arr2, function (index8, item8) {
                    futureString += '<div>' + item8.RACE_NUMBER + '</div>'
                });

                futureString+='</td>';

                futureString += '<td>\n';
                jQuery.each(arr2, function (index6, item6) {
                    futureString += '<div class="name">' + item6.JOCKEY_FIRST + ' ' +item6.JOCKEY_LAST + '</div>'
                });

                futureString+='</td></tr>';

                futureTable.append(futureString);

                //sortTable($('#future-races'),'desc');
            })
        },
        error: function(error){
            console.log(error);
        }
    });

})(jQuery);