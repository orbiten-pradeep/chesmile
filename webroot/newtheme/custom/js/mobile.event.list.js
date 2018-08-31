chennaiSmileMobile = {};
chennaiSmileMobile.parent = chennaiSmile;
chennaiSmileMobile.menu = $('.mobile-menu');
chennaiSmileMobile.loginBtn = $('.mob-open-login');
chennaiSmileMobile.searchBtn = $('#mobileFilterCategoryBtn');
chennaiSmileMobile.filterBtn = $("#mobileFilterBtn");
chennaiSmileMobile.categoryModal = $('.modal-mob-filter-cat');
chennaiSmileMobile.filterModal = $('.modal-mob-filter');

chennaiSmileMobile.filterElem = {};
chennaiSmileMobile.filterElem.date = $('.mob-filter-date');
chennaiSmileMobile.filterElem.type = $('.mob-filter-type');

chennaiSmileMobile.categoryTagInputElem = $("#mobEventCategorySearch");
chennaiSmileMobile.categoryTagInputPlaceHolder = chennaiSmileMobile.categoryTagInputElem.attr('placeholder');
chennaiSmileMobile.categoryTagInputElem.tagsinput({
	allowDuplicates: false,
	itemValue: 'id',  // this will be used to set id of tag
	itemText: 'text' // this will be used to set text of tag
});

chennaiSmileMobile.categoryTagInputParentElem = $('.mob-category-list .bootstrap-tagsinput');
chennaiSmileMobile.categoryDivElem = $('.mob-category-list');
chennaiSmileMobile.categoryClearBtn = $('.mob-cat-clear');
chennaiSmileMobile.categoryApplyBtn = $('.mob-cat-apply');


chennaiSmileMobile.parentCategoryDivElem = $('.inner-mob-category-list');
chennaiSmileMobile.parentCategory = {};
chennaiSmileMobile.parentCategory.id;
chennaiSmileMobile.parentCategory.text;

chennaiSmileMobile.subCategoryDivElem = $('.mob-sub-category-list');
chennaiSmileMobile.subCategory = {};
chennaiSmileMobile.subCategory.id;
chennaiSmileMobile.subCategory.text;

chennaiSmileMobile.parentCategoryElem = $('.mob-cs-cat');

chennaiSmileMobile.getSubCategoryList = function() {
	var self = this;
	var pCategoryId = this.parentCategory.id;
	var pCcategoryText = this.parentCategory.text;
	var subCategoryApiUrl = $("#sub_category_api_url").val();

    $.ajax({
        type:"POST",
        data: { "id": pCategoryId },
        ContentType : 'application/json',
        dataType: 'json',
        url: subCategoryApiUrl,
        async:true,
        success: function(data) {
        	if(data != '') {
        		//console.log(data);
	        	var html = '<ul class="list-group">';
	        	var rcnt = 0;
	            $.each(data, function(key, val){
	            	rcnt++;
	            	html += '<li class="list-group-item mob-cs-sub-cat">\
								<div class="form-check checkbox-primary" id="'+key+'" text="'+val+'">\
							    <input type="checkbox" class="form-check-input sub-category" id="checkbox'+key+'" value="'+key+'">\
							    <label class="form-check-label" for="checkbox'+key+'">'+val+'</label>\
								</div>\
							</li>'
	            })
	            html += '</ul>';
	            //console.log(html);

	            self.subCategoryDivElem.html(html);
	            self.parentCategoryDivElem.hide();
	            self.subCategoryDivElem.show();
        	}
        	else {
        		self.searchTextBoxElem.tagsinput('removeAll');
        		self.parentCategory = {};
        		self.parentCategory.id = pCategoryId;
				self.parentCategory.text = pCcategoryText;
				self.searchTextBoxElem.tagsinput('add', self.parentCategory);				
        	}
        },
        error: function (tab) {
            //$select.html('<option id="-1">none available</option>');
        }
    });
}

$(document).ready(function() {
	var self = chennaiSmileMobile;
	self.menu.click(function() {
		$('.modal-mob-menus')
	        .prop('class', 'modal mobile-modal modal-mob-menus fade')
	        .addClass( $(this).data('direction') );
	    $('.modal-mob-menus').modal('show');
	});

	self.loginBtn.click(function() {
		$('.modal-mob-menus').modal('toggle');
		$('.login-popup').modal('show');
	});

	self.searchBtn.click(function() {
		self.categoryModal.modal('show');
	});

	self.filterBtn.click(function() {
		self.filterModal.modal('show');
	});

	self.parentCategoryElem.click(function() {
		self.categoryTagInputElem.tagsinput('removeAll');
		self.parentCategory = {};
		self.parentCategory.id = $(this).attr('data-id');
		self.parentCategory.text = $(this).attr('data-text');
		self.categoryTagInputElem.tagsinput('add', self.parentCategory);
		self.categoryTagInputParentElem.find('input').attr('placeholder', '');
		self.getSubCategoryList();
	});

	self.categoryDivElem.on('click','.mob-cs-sub-cat input', function(event){
		event.stopPropagation();
		self.subCategory = {};
		self.subCategory.id = $(this).parent().attr('id');
		self.subCategory.text = $(this).parent().attr('text');
		if($(this).is(':checked')) {
			self.categoryTagInputElem.tagsinput('add', self.subCategory);
			self.categoryTagInputParentElem.find('input').attr('placeholder', '');
		} else {
			self.categoryTagInputElem.tagsinput('remove', self.subCategory);
		}
	});

	self.categoryClearBtn.click(function(){
		self.parent.filterParams.category = {};
		self.categoryTagInputElem.tagsinput('removeAll');
		self.subCategoryDivElem.html('').hide();
		self.parentCategoryDivElem.show();
		self.categoryTagInputParentElem.find('input').attr('placeholder', self.categoryTagInputPlaceHolder);		
	});

	self.categoryApplyBtn.click(function(){
		var categoryItems = self.categoryTagInputElem.tagsinput('items');

		var parentCategory = categoryItems.shift();
		var categoryUrl = self.parent.baseUrl + "events/category/"+parentCategory['id'];
		if(categoryItems.length > 0) {
			sessionStorage.subCategoryItems =  JSON.stringify(categoryItems);
		}				
		$.redirect(categoryUrl, categoryItems);
		return;

		categoryItems.forEach(function(item){
			self.parent.filterParams.category.push(item.id);
			self.parent.filterTextArr.push({'type':'category', 'text': item.text, 'value': item.id });
		});

		self.parent.filterParams.page = 0;
		self.parent.masonryDestory();
		self.parent.generateFilterText();
		self.parent.getEventList();
		self.parent.favCategoryDivElem.hide();
		self.categoryModal.modal('toggle');
	});

	self.filterElem.date.click(function() {
		self.parent.filterParams.date = $(this).attr('data');

		var textIndex = self.parent.filterTextArr.findIndex(element => (element.type == 'date'));
		if (textIndex !== -1) self.parent.filterTextArr.splice(textIndex, 1);

		self.parent.filterTextArr.push({'type':'date', 'text': $(this).html(), 'value': $(this).attr('data')});
		self.parent.filterParams.page = 0;
		self.parent.masonryDestory();
		self.parent.generateFilterText();
		self.parent.getEventList();
		self.parent.favCategoryDivElem.hide();
		self.filterModal.modal('toggle');
	});

	self.filterElem.type.click(function() {
		self.parent.filterParams.type = $(this).attr('data');

		var textIndex = self.parent.filterTextArr.findIndex(element => (element.type == 'type'));
		if (textIndex !== -1) self.parent.filterTextArr.splice(textIndex, 1);

		self.parent.filterTextArr.push({'type':'type', 'text': $(this).attr('data-text'), 'value': $(this).attr('data')});
		self.parent.filterParams.page = 0;
		self.parent.masonryDestory();
		self.parent.generateFilterText();
		self.parent.getEventList();
		self.parent.favCategoryDivElem.hide();
		self.filterModal.modal('toggle');
	});
});

