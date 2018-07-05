$(function () {
    getMorris('line', 'line_chart');
    getMorris('bar', 'bar_chart');
    getMorris('area', 'area_chart');
    getMorris('bar_tick', 'bar_ticket');
    getMorris('donut', 'donut_chart');
});


function getMorris(type, element) {
    if (type === 'line') {
        Morris.Line({
            element: element,
            data: [{
                'period': '2011 Q3',
                'licensed': 3407,
                'sorned': 660
            }, {
                    'period': '2011 Q2',
                    'licensed': 3351,
                    'sorned': 629
                }, {
                    'period': '2011 Q1',
                    'licensed': 3269,
                    'sorned': 618
                }, {
                    'period': '2010 Q4',
                    'licensed': 3246,
                    'sorned': 661
                }, {
                    'period': '2009 Q4',
                    'licensed': 3171,
                    'sorned': 676
                }, {
                    'period': '2008 Q4',
                    'licensed': 3155,
                    'sorned': 681
                }, {
                    'period': '2007 Q4',
                    'licensed': 3226,
                    'sorned': 620
                }, {
                    'period': '2006 Q4',
                    'licensed': 3245,
                    'sorned': null
                }, {
                    'period': '2005 Q4',
                    'licensed': 3289,
                    'sorned': null
                }],
            xkey: 'period',
            ykeys: ['licensed', 'sorned'],
            labels: ['Licensed', 'Off the road'],
            lineColors: ['rgb(233, 30, 99)', 'rgb(0, 188, 212)'],
            lineWidth: 3
        });
    } else if (type === 'bar') {
        Morris.Bar({
            element: element,
            data: [{
                x: 'Last Month',
                Users: lastmonth
            }, {
                    x: 'Last Week',
                    Users: lastweek
                }, {
                    x: 'Yesterday',
                    Users: yestuser
                }, {
                    x: 'Today',
                    Users: newuser
                }],
            xkey: 'x',
            xLabelAngle: 60,
            ykeys: ['Users'],
            labels: ['Users'],
            barColors: ['rgb(233, 30, 99)'],
        });
    } else if (type === 'bar_tick') {
        Morris.Bar({
            element: element,
            data: [{
                x: 'Last Year',
                Tickets: lastyear_tickets
            },{
                x: 'Last Month',
                Tickets: lastmonth_tickts
            }, {
                    x: 'Last Week',
                    Tickets: lastweek_tickets
                }, {
                    x: 'Yesterday',
                    Tickets: yesterday_tickets
                }, {
                    x: 'Today',
                    Tickets: today_tickets
                }],
            xkey: 'x',
            xLabelAngle: 60,
            ykeys: ['Tickets'],
            labels: ['Tickets'],
            barColors: ['rgb(233, 30, 99)'],
        });
    }else if (type === 'area') {
        Morris.Area({
            element: element,
            data: [{
                period: '2010 Q1',
                iphone: 2666,
                ipad: null,
                itouch: 2647
            }, {
                    period: '2010 Q2',
                    iphone: 2778,
                    ipad: 2294,
                    itouch: 2441
                }, {
                    period: '2010 Q3',
                    iphone: 4912,
                    ipad: 1969,
                    itouch: 2501
                }, {
                    period: '2010 Q4',
                    iphone: 3767,
                    ipad: 3597,
                    itouch: 5689
                }, {
                    period: '2011 Q1',
                    iphone: 6810,
                    ipad: 1914,
                    itouch: 2293
                }, {
                    period: '2011 Q2',
                    iphone: 5670,
                    ipad: 4293,
                    itouch: 1881
                }, {
                    period: '2011 Q3',
                    iphone: 4820,
                    ipad: 3795,
                    itouch: 1588
                }, {
                    period: '2011 Q4',
                    iphone: 15073,
                    ipad: 5967,
                    itouch: 5175
                }, {
                    period: '2012 Q1',
                    iphone: 10687,
                    ipad: 4460,
                    itouch: 2028
                }, {
                    period: '2012 Q2',
                    iphone: 8432,
                    ipad: 5713,
                    itouch: 1791
                }],
            xkey: 'period',
            ykeys: ['iphone', 'ipad', 'itouch'],
            labels: ['iPhone', 'iPad', 'iPod Touch'],
            pointSize: 2,
            hideHover: 'auto',
            lineColors: ['rgb(233, 30, 99)', 'rgb(0, 188, 212)', 'rgb(0, 150, 136)']
        });
    } else if (type === 'donut') {
        Morris.Donut({
            element: element,
            data: [{
                label: 'Active Events',
                value: activeevents
            }, {
                    label: 'Waiting Approval',
                    value: waitingapproval
                }, {
                    label: 'Paid Events',
                    value: paidevents
                }, {
                    label: 'Free Events',
                    value: freeevents
                }, {
                    label: 'Total Events',
                    value: totalevents,
                    hideHover: 'auto'
                }],
            colors: ['rgb(233, 30, 99)', 'rgb(0, 188, 212)', 'rgb(255, 152, 0)', 'rgb(0, 150, 136)','rgb(71, 71, 71)'],
            formatter: function (y) {
                return y + ' events'
            }
        });
    }
}