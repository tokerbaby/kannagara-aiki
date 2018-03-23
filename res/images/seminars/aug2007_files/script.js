bindReady(function() {
    if($('#member').size()){photoCutPreserver()};
	Pages.All();  //редактирование данных на сайте
	if($('.seminarReg').size()){Pages.RegSeminar()};


    $('.video').each( function() {
        var $youtubeContainer = $(this).find('.video__image-link');
        var max_width = $youtubeContainer.attr('data-toggle-max');
        if(window.matchMedia('(max-width: '+max_width+'px)').matches){
            $youtubeContainer.lazyYT('AIzaSyA7w4vjMyhWDEsKeJRhhtj6l96wOS7bRaw', {
                display_title: false
            });
        } else {
            $youtubeContainer.attr('data-fancybox', 'video');
        }
    });

    $('body [data-fancybox="video"]').fancybox({
      afterLoad : function( instance, current ) {

         // Remove scrollbars and change background
        current.$content.css({
        	overflow   : 'visible',
			background : '#000'
		});
           
      },

      onUpdate : function( instance, current ) {
        var width,
            height,
            ratio = 16 / 9,
            video = current.$content;
        
        if ( video ) {
          video.hide();

          width  = current.$slide.width();
          height = current.$slide.height() - 100;
          
          if ( height * ratio > width ) {
            height = width / ratio;
          } else {
            width = height * ratio;
          }

          video.css({
            width  : width,
            height : height
          }).show();

        }
      }
    });
    // lazy youtube end


})


Pages = {};



function checkOrderCatalogForm(){
	document.forms["subscribe"].submit();
	return true;
}


//Кроссбраузерное событие onDOMContentLoaded
function bindReady(handler){
	var called = false

	function ready() { // (1)
		if (called) return
		called = true
		handler()
	}

	if ( document.addEventListener ) { // (2)
		document.addEventListener( "DOMContentLoaded", function(){
			ready()
		}, false )
	} else if ( document.attachEvent ) {  // (3)

		// (3.1)
		if ( document.documentElement.doScroll && window == window.top ) {
			function tryScroll(){
				if (called) return
				if (!document.body) return
				try {
					document.documentElement.doScroll("left")
					ready()
				} catch(e) {
					setTimeout(tryScroll, 0)
				}
			}
			tryScroll()
		}

		// (3.2)
		document.attachEvent("onreadystatechange", function(){

			if ( document.readyState === "complete" ) {
				ready()
			}
		})
	}

	// (4)
    if (window.addEventListener)
        window.addEventListener('load', ready, false)
    else if (window.attachEvent)
        window.attachEvent('onload', ready)
    /*  else  // (4.1)
        window.onload=ready
	*/
}



nn4 = (document.layers) ? true : false;
ie4 = (document.all) ? true : false;
dom = (document.createTextNode)? true : false;


//как себя ведёт окошко входа для зарег. пользователей
function loginPanelHide(){
	$('#loginPanel').hide('fast');
	$('#megaBgHalfTransp').hide();
}


function loginPanelShow(){
	$('#loginPanel').show('fast');
	$('#megaBgHalfTransp').show();
	document.getElementById('Username').focus();
}


function toggleVisit(obj, unixtime, userID){
	if(obj.className == 'mark'){
		obj.className = ''
		var actionType = 'unsettime';
	}else{
		obj.className = 'mark';
		var actionType = 'settime';
	} 
	
	$.get("action.php", {action:actionType, unixtime:unixtime, userID:userID, nocahe: Math.random()} );
}

function togglePayment(obj, unixtime, userID){
	if(obj.className == 'noPayment'){
		obj.className = 'yesPayment';
		var actionType = 'setpay';
	}else{
		obj.className = 'noPayment';
		var actionType = 'unsetpay';
	}

	$.get("action.php", {action:actionType, unixtime:unixtime, userID:userID, nocahe: Math.random()} );
}

/*
function toggeImage(cellObj, imgID, event){
	if (window.event) event = window.event;
	var mousePos  = mouseCoords(event);

	var myImg = $('image'+imgID);
	var wHeight = document.body.clientHeight;
	if((mousePos.y + parseInt(myImg.style.height)) > wHeight){
		myImg.style.top = 0	
	}
	//myImg.style.display = myImg.style.display == 'none' ? 'block' : 'none';
	
}
*/


function line_highlight(obj, on, off){
	if(obj.tagName == 'TD')
		var h_obj = obj.parentNode;
	else
		var h_obj = obj;
	if(!on)
		on = 'highlight';
	h_obj.className = h_obj.className == on ? off : on;
}


function viewParagraph(ptable, link){
	var obj = document.getElementById(ptable);
	obj.className = obj.className == 'pNone' ? 'pVisible' : 'pNone';
	link.className = link.className == 'cur' ? '' : 'cur';
}

function regForm(s_name,name,l_name,email,passwd,birth_date,mob_tel,home_tel,icq,training_start,kannagara_start,dan_date,text,id,cookie,submited,grade,dan,mode) {
	var formblock = document.getElementById('formblock');
	
	var html = '<form name="subscribe" method="post" enctype="multipart/form-data" action="action.php">' +
					'<table class="form" cellpadding="0" cellspacing="0" border="0">' +
					'<tr>' +
						'<td class="leftCol" valign="top">Фамилия:</td>' +
						'<td><input type="text" name="field_for_bot" value="" style="position:absolute; left:-9999px;"/><input type="text" name="s_name" size="45" value="'+s_name+'" maxlength="254"/></td>' +
					'</tr>' +
					'<tr>' +
						'<td class="leftCol" valign="top">Имя:</td>' +
						'<td><input type="text" name="name" size="45" value="'+name+'" maxlength="254"/></td>' +
					'</tr>' +
					'<tr>' +
						'<td class="leftCol" valign="top">Отчество:</td>' +
						'<td><input type="text" name="l_name" size="45" value="'+l_name+'" maxlength="254"/></td>' +
					'</tr>' +
					'<tr>' +
						'<td class="leftCol" valign="top">Эл. почта:</td>' +
						'<td><input size="45" type="text" name="email" value="'+email+'" maxlength="128"/></td>' +
					'</tr>' +
					'<tr>' +
						'<td class="leftCol" valign="top">Пароль:</td>' +
						'<td><input size="45" type="password" name="passwd" value="'+passwd+'" maxlength="128"/><br/><small>ваш пароль для доступа к закрытому разделу</small></td>' +
					'</tr>' +
					'<tr>' +
						'<td class="leftCol" valign="top">Дата рождения:</td>' +
						'<td><input size="45" type="text" name="birth_date" value="'+birth_date+'" maxlength="128"/><br/><small>30.12.1999</small></td>' +
					'</tr>' +
					'<tr>' +
						'<td class="leftCol" valign="top">Мобильный телефон:</td>' +
						'<td><input type="text" name="mob_tel" size="45" value="'+mob_tel+'" maxlength="128"/><br/><small>+7 (916) 123-45-67</small></td>' +
					'</tr>' +
					'<tr>' +
						'<td class="leftCol" valign="top">Домашний телефон:</td>' +
						'<td><input type="text" name="home_tel" size="45" value="'+home_tel+'" maxlength="128"/><br/><small>+7 (495) 123-45-67</small></td>' +
					'</tr>' +
					'<tr>' +
						'<td class="leftCol" valign="top">Номер ICQ:</td>' +
						'<td><input size="45" type="text" name="icq" value="'+icq+'" maxlength="128"/></td>' +
					'</tr>' +
					'<tr>' +
						'<td class="leftCol" valign="top">Начало занятий и в каком додзё:</td>' +
						'<td><input size="45" type="text" name="training_start" value="'+training_start+'" maxlength="128"/></td>' +
					'</tr>' +
					'<tr>' +
						'<td class="leftCol" valign="top">Начало занятий в Каннагара додзё:</td>' +
						'<td><input size="45" type="text" name="kannagara_start" value="'+kannagara_start+'" maxlength="128"/></td>' +
					'</tr>' +
					'<tr>' +
						'<td class="leftCol" valign="top">Дан (кю) и дата присуждения:</td>' +
						'<td><input size="45" type="text" name="dan_date" value="'+dan_date+'" maxlength="128"/></td>' +
					'</tr>' +
					'<tr>' +
						'<td class="leftCol" valign="top">Фото:</td>' +
						'<td><input type="file" name="image"/></td>' +
					'</tr>' +
					'<tr>' +
						'<td class="leftCol" valign="top">Примечание:</td>' +
						'<td><textarea type="text" name="text" cols="40" rows="5">'+text+'</textarea></td>' +
					'</tr>';
					
					var html2 = '<tr>' +
								'<td class="leftCol"></td>' +
								'<td><input type="submit" name="ok" value="Сохранить"/></td>' +
							'</tr>' +
							'<input type="hidden" name="action" value="edit_object"/>' +
							'<input type="hidden" name="id" value="'+id+'"/>' +
							'<input type="hidden" name="cookie" value="'+cookie+'"/>' +
							'<input type="hidden" name="submited" value="'+submited+'"/>' +
							'<input type="hidden" name="grade" value="'+grade+'"/>' +
							'<input type="hidden" name="dan" value="'+dan+'"/>';

					var html3 = '<tr>' +
								'<td class="leftCol"></td>' +
								'<td><input type="submit" name="ok" value="Добавить"/></td>' +
							'</tr>' +
							'<input type="hidden" name="action" value="add_object"/>';
							
					var html4 = '<input type="hidden" name="mode" value="'+mode+'"/>' +
					'</table>' +
				'</form>';
				
				if(id > 0) {
					var out_html = html + html2 + html4;
				} else {
					var out_html = html + html3 + html4;
				}
				formblock.innerHTML = out_html;
}


//чтобы фотки не резались низом экрана
function photoCutPreserver(){
	var memberList = document.getElementById('member'),//контейнер
		padding = 10,//мин. отступ от нижней границы окна до фотки
		windowHeight,//высота окна
		getBodyScrollTop;//на сколько прокручен документ
	
	memberList.onmouseover = function(e){
		var img = getTarget(e);
		if(img){
			//высота окна
			windowHeight = function(){
				var myHeight = 0;
				if( typeof( window.innerHeight ) == 'number' ) {
					myHeight = window.innerHeight;
				} 
				else if(document.documentElement && document.documentElement.clientHeight) {
					myHeight = document.documentElement.clientHeight;
				} 
				else if( document.body && document.body.clientHeight) {
					myHeight = document.body.clientHeight;
				}
				return myHeight;
			};
		
			//на сколько прокручен документ
			getBodyScrollTop = function(){
				return self.pageYOffset || (document.documentElement && document.documentElement.scrollTop) || (document.body && document.body.scrollTop);
			};
			
			
			img.className = 'show';
			if(bottomOfEl(img) > windowHeight()-padding){
				img.style.top = (img.offsetTop -(bottomOfEl(img) - windowHeight() + padding))+'px';
			}
		}
	}
	
	memberList.onmouseout = function(e){
		var img = getTarget(e);
		if(img){
			img.className = 'hide';
		}
	}
	
	//на кого навели
	function getTarget(x){
		x = x || window.event;
		t = x.target || x.srcElement;
		if(t.nodeName == 'A'){
			var img = t.getElementsByTagName('div')[0];
			return img;
		}
		return false;
	}
	
	//координата верха фотки относительно всего документа
	function docRelPos(obj) {
		var curtop = 0;
		if (obj.offsetParent){
			do{
				curtop += obj.offsetTop;
			} 
			while (obj = obj.offsetParent);
		}
		return curtop;
	}
	
	//координата верха элемента относительно окна
	function topOfEl(el){
		return docRelPos(el) - getBodyScrollTop();
	}
	
	//координата низа элемента относительно окна
	function bottomOfEl(el){
		return topOfEl(el)+el.offsetHeight;
	}
}


Pages.All = function(){
	$("a.fancyImg").fancybox({
		'zoomOpacity' : true,
		'overlayShow' : true,
		'zoomSpeedIn' : 'fast',
		'zoomSpeedOut' : 'fast'
	}); 
	
	
	
	//"редактируемый объект" (нужен для общения с сервером)
	var	EditableItem = function(tmpId){
		//отправляет новые данные формы на сервер
		var	curForm = {},
			sendToServer = function(newData){
				$.ajax({
					type   : "POST",
					cache  : false,
					url	   : "action.php",
					data   : {'action':'setEditedItem', 'id':tmpId, 'newData':newData},
					dataType : "json",
					success: function(){location.reload();}
				});
			};
		
		
		//получает данные с сервера для создания формы
		$.ajax({
			type   : "POST",
			cache  : false,
			url	   : "action.php",
			data   : {'action':'getEditedItem', 'id':tmpId},
			dataType : "json",
			success: function(data) {
				curForm = new Form(data);
				curForm.draw(); 
				curForm.button.live('click', function(){
					sendToServer(curForm.getCurData()); 
					return false;
				})
			}
		});
	};
		
		
	//форма для "редактируемого обекта"
	var	Form = function(tmpData){
		//проявляет форму
		this.draw = function(){
			$.fancybox({
				'content' : function(){
					var formHTML = '';
					
					$(tmpData).each(function(){
						switch(this[0]){
							case 'varchar':
								formHTML += '\
									<tr>\
										<td>'+this[2]+'</td>\
										<td>\
											<fieldset class="text"><input type="text" value="'+this[1]+'"/></fieldset>\
										</td>\
									</tr>\
								';
							break;
							case 'zoption':
								var curFieldSet = '';
								for(i=0; i<this[1].length; i++){
									var ckeckState = this[1][i][2],
										name = this[1][i][1];
									curFieldSet += '<input type="checkbox" '+ckeckState+'/>'+name+'<br/>';
								}
								formHTML += '\
									<tr>\
										<td>'+this[2]+'</td>\
										<td>\
											<fieldset class="checkbox">'+curFieldSet+'</fieldset>\
										</td>\
									</tr>\
								';
							break;
						}
					})
					formHTML = '\
						<form id="editItem">\
							<table>\
								'+formHTML+'\
								<tr><td/><td><input type="button" value="сохранить"/></td>\
							</table>\
						</form>\
					';
					return formHTML;
				}
			});
		}
		
		
		//собирает текущие данные в форме
		this.getCurData = function(){
			var curData = [],
				innerArr = [];
				
			$(tmpData).each(function(i){
				var curFieldset = $('#editItem fieldset:eq('+i+')');
				switch(curFieldset.attr('class')){
					case 'text':
						curData.push(curFieldset.find(":nth-child(1)").val());
					break;
					case 'checkbox':
						curFieldset.find('input').each(function(){
							innerArr.push($(this).is(':checked') ? 'ckecked' : '');
						})
						curData.push(innerArr);
					break;
				}
			})
			return curData;
		}
	}
	Form.prototype.button = $("#editItem :button");
	
	
	//клик на редактируемом объекте
	$("#timeTableWrap").click(function(e){ 	
		if(e.ctrlKey && $(e.target).is('[id^="editable"]')) { 
			e.preventDefault();
			var itemId = $(e.target).attr('id').replace('editable', '')
			new EditableItem(itemId);
		} 
	}); 
	
	
	
	//при нажатом контроле (подсветка редактируемых объектов)
	(function(){
		var flag = true,
			editables = $('[id^="editable"]');
			
		$(document).keydown(function(e){
			if(flag && e.keyCode == 17){
				flag = false;
				editables.addClass('editable');
			}
		}).keyup(function(e){
			if(e.keyCode == 17){
				flag = true;
				editables.removeClass('editable');
			}
		});
	})();
	
}



//регистрация на семинаре
Pages.RegSeminar = function(){
	var handler = function(){
		var antispamObj = {
			checker: function(){
				var reqFields = $('input.req'),
					checkFields = function(){
						var button = $('.subIt'),
							reqFieldsNum = reqFields.size(),
							filledNum = 0;

						reqFields.each(function(){
							if($(this).val() != '') filledNum++;
						});
						
						if(filledNum == reqFieldsNum)
							button.attr('disabled', '').removeClass('disabled');
						else
							button.attr('disabled', 'true').addClass('disabled');
					};
				
				checkFields();
				reqFields.keyup(function(){checkFields()});
			},
			
			drawForm: function(wrapSel){
					formHTML = '\
						<form class="hidden" name="subscribe" method="post" enctype="multipart/form-data" action="action.php">\
							<table class="form" cellpadding="0" cellspacing="0">\
								<tr>\
									<td class="leftCol" valign="top">ФИО контактного лица: *</td>\
									<td><input class="req" type="text" name="name" size="30" value="" maxlength="254"/></td>\
								</tr>\
								<tr>\
									<td class="leftCol" valign="top">Контактный телефон: *</td>\
									<td><input class="req" type="text" name="tel" size="30" value="" maxlength="128"/></td>\
								</tr>\
								<tr>\
									<td class="leftCol" valign="top">Эл. почта:</td>\
									<td><input size="30" type="text" name="email" value="" maxlength="128"/></td>\
								</tr>\
								<tr>\
									<td colspan="2"><img src="graphics/tr.gif" width="1" height="15"/></td>\
								</tr>\
								<tr>\
									<td class="leftCol" valign="top">Что вы хотите посетить:</td>\
									<td>\
										<input type="checkbox" name="one_day" value="Чтв. 15 сентября"/>&#160;Чтв. 15 сентября<br/>\
										<input type="checkbox" name="two_day" value="Птн. 16 сентября"/>&#160;Птн. 16 сентября<br/>\
										<input type="checkbox" name="three_day" value="Сб. 17 сентября"/>&#160;Сб. 17 сентября<br/>\
										<input type="checkbox" name="four_day" value="Вск. 18 сентября"/>&#160;Вск. 18 сентября\
									</td>\
								</tr>\
								<tr>\
									<td colspan="2"><img src="graphics/tr.gif" width="1" height="15"/></td>\
								</tr>\
								<tr>\
									<td class="leftCol" valign="top">Клуб, где вы занимаетесь:</td>\
									<td><input size="30" type="text" name="dojo" value="" maxlength="128"/></td>\
								</tr>\
								<tr>\
									<td class="leftCol" valign="top">Степень (дан/кю):</td>\
									<td><input size="30" type="text" name="grade" value="" maxlength="128"/></td>\
								</tr>\
								<tr>\
									<td class="leftCol" valign="top">Стаж занятий айкидо:</td>\
									<td><input size="30" type="text" name="train_time" value="" maxlength="128"/></td>\
								</tr>\
								<tr>\
									<td colspan="2"><img src="graphics/tr.gif" width="1" height="15"/></td>\
								</tr>\
									<td>\
										<input class="subIt disabled" type="submit" name="ok" value="Отправить" disabled="true"/>\
										<input type="text" name="needToFill" value="notFilled" class="hiddenF"/>\
										<input type="hidden" name="action" value="mail_send"/>\
										<input type="hidden" name="mode" value="{/page/constants/mode}"/>\
									</td>\
								</tr>\
							</table>\
						</form>\
					';
/*				var formHTML = '\
						<form class="hidden" name="subscribe" method="post" enctype="multipart/form-data" action="action.php">\
							<table class="form" cellpadding="0" cellspacing="0">\
								<tr>\
									<td class="leftCol" valign="top">ФИО контактного лица: *</td>\
									<td><input class="req" type="text" name="name" size="30" value="" maxlength="254"/></td>\
								</tr>\
								<tr>\
									<td class="leftCol" valign="top">Контактный телефон: *</td>\
									<td><input class="req" type="text" name="tel" size="30" value="" maxlength="128"/></td>\
								</tr>\
								<tr>\
									<td class="leftCol" valign="top">Эл. почта:</td>\
									<td><input size="30" type="text" name="email" value="" maxlength="128"/></td>\
								</tr>\
								<tr>\
									<td colspan="2"><img src="graphics/tr.gif" width="1" height="15"/></td>\
								</tr>\
								<tr>\
									<td class="leftCol" valign="top">Что вы хотите посетить:</td>\
									<td>\
										<input type="checkbox" name="f_day" value="Птн. 19 ноября"/>&#160;Птн. 19 ноября<br/>\
										<input type="checkbox" name="s_day" value="Сб. 20 ноября"/>&#160;Сб. 20 ноября<br/>\
										<input type="checkbox" name="t_day" value="Вск. 21 ноября"/>&#160;Вск. 21 ноября\
									</td>\
								</tr>\
								<tr>\
									<td colspan="2"><img src="graphics/tr.gif" width="1" height="15"/></td>\
								</tr>\
								<tr>\
									<td class="leftCol" valign="top">Клуб, где вы занимаетесь:</td>\
									<td><input size="30" type="text" name="dojo" value="" maxlength="128"/></td>\
								</tr>\
								<tr>\
									<td class="leftCol" valign="top">Степень (дан/кю):</td>\
									<td><input size="30" type="text" name="grade" value="" maxlength="128"/></td>\
								</tr>\
								<tr>\
									<td class="leftCol" valign="top">Стаж занятий айкидо:</td>\
									<td><input size="30" type="text" name="train_time" value="" maxlength="128"/></td>\
								</tr>\
								<tr>\
									<td colspan="2"><img src="graphics/tr.gif" width="1" height="15"/></td>\
								</tr>\
									<td>\
										<input class="subIt disabled" type="submit" name="ok" value="Отправить" disabled="true"/>\
										<input type="text" name="needToFill" value="notFilled" class="hiddenF"/>\
										<input type="hidden" name="action" value="mail_send"/>\
										<input type="hidden" name="mode" value="{/page/constants/mode}"/>\
									</td>\
								</tr>\
							</table>\
						</form>\
					';
*/
				$(wrapSel).html(formHTML).children().slideToggle('slow');
			}
		};
		
		
		$(document).mousemove(function(e){
			antispamObj.drawForm('.formWrap');
			setTimeout(antispamObj.checker, 2000);  //лочит-анлочит кнопку "отправить"
			$(this).unbind(e);
		});
	};
	
	setTimeout(handler, 100);
}

