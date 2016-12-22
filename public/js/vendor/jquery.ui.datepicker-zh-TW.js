//中文日曆預設值
//用法:在頁面加上 $.datepicker.setDefaults($.datepicker.regional['zh-TW']);


jQuery(function($){
	$.datepicker.regional['zh-TW'] = {
		clearText   	: '清除',  		        clearStatus   : '清除已選日期',
		closeText   	: '關閉',   		    closeStatus   : '不改變目前的選擇',
		prevText    	: '&#x3c;上月',         prevStatus    : '顯示上月',
		nextText    	: '下月&#x3e;',         nextStatus    : '顯示下月',
		prevBigText 	: '&#x3c;&#x3c;',       prevBigStatus : '顯示上一年',
		nextBigText 	: '&#x3e;&#x3e;',       nextBigStatus : '顯示下一年',
		currentText     : '今天',               currentStatus : '顯示本月',
		monthStatus     : '選擇月份',           yearStatus    : '選擇年份',
		weekHeader      : '周',                 weekStatus    : '年內周次',
		monthNames      : ['一月','二月','三月','四月','五月','六月','七月','八月','九月','十月','十一月','十二月'],
		monthNamesShort : ['1月','2月','3月','4月','5月','6月','7月','8月','9月','10月','11月','12月'],
		dayNames        : ['星期日','星期一','星期二','星期三','星期四','星期五','星期六'],
		dayNamesShort   : ['周日','周一','周二','周三','周四','周五','周六'],
		dayNamesMin     : ['日','一','二','三','四','五','六'],
		
		showMonthAfterYear: true,
		
		dateFormat      : 'yy/mm/dd',
		firstDay        : 0      //0為星期天
		
//		yearSuffix: '年',
//		dayStatus: '設定 DD 為一周起始',
//		dateStatus: '選擇 m月 d日, DD',
//		initStatus: '請選擇日期',
//		isRTL: false,

	};
	
	

	
/*
	//將日曆下拉由西元改成民國的特別設定(需測試)
	

    var old_generateMonthYearHeader = $.datepicker._generateMonthYearHeader;
    var old_get = $.datepicker._get;
    var old_CloseFn = $.datepicker._updateDatepicker;
  
    $.extend($.datepicker, {
	
		//以下為顯示在日曆部分的年分，改成民國年，但是在firefox顯示不出來~暫時不啟用
        _generateMonthYearHeader:function (a,b,c,d,e,f,g,h) {
            var htmlYearMonth = old_generateMonthYearHeader.apply(this, [a, b, c, d, e, f, g, h]);
            if ($(htmlYearMonth).find(".ui-datepicker-year").length > 0) {
                htmlYearMonth = $(htmlYearMonth).find(".ui-datepicker-year").find("option").each(function (i, e) {
                    if (Number(e.value) - 1911 > 0) $(e).text('民國'+(Number(e.innerText)-1911));
                }).end().end().get(0).outerHTML;
            }
            return htmlYearMonth;
        },
        _get:function (a, b) {
            a.selectedYear = a.selectedYear - 1911 < 0 ? a.selectedYear + 1911 : a.selectedYear;
            a.drawYear = a.drawYear - 1911 < 0 ? a.drawYear + 1911 : a.drawYear;
            a.curreatYear = a.curreatYear - 1911 < 0 ? a.curreatYear + 1911 : a.curreatYear;
            return old_get.apply(this, [a, b]);
        },
        _updateDatepicker:function (inst) {
            old_CloseFn.call(this, inst);
            $(this).datepicker("widget").find(".ui-datepicker-buttonpane").children(":last")
                   .click(function (e) {
                        inst.input.val("");
                    });
        },
        _setDateDatepicker: function (a, b) {
            if (a = this._getInst(a)) { this._setDate(a, b); this._updateDatepicker(a); this._updateAlternate(a) }
        },
        _widgetDatepicker: function () {
            return this.dpDiv
        },
	
		//以下為從日曆點選後，抓取顯示在text欄位的日期
		formatDate: function (format, date, settings) {  
				var d = date.getDate();  
				var m = date.getMonth()+1;  
				var y = date.getFullYear();           
				var fm = function(v){return (v<10 ? '0' : '')+v;};            
				return (y-1911) +'/'+ fm(m) +'/'+ fm(d);  
			},  
		
			parseDate: function (format, value, settings) {  
				var v = new String(value);  
				var Y,M,D;  
	
				if (v != ""){
					  Y = v.substr(0,v.indexOf("/"))-0  +1911;
					  M = v.substr(v.indexOf("/")+1,2) -1;
					  D = v.substr(v.lastIndexOf("/")+1,2)-0 ;
					  return (new Date(Y,M,D));
				  }else{
					  return (new Date());
				  }
	
    });
	 */
	 
});
