;(function($){
	$.fn.xCarousel = function(options){
		let defaults = {
			width:800,
			height:260,
			index:0,
			duration:3000,
			autoPlay:true,
			type:'vertical',
			seamless:false,
			page:true
		}

		return this.each(function(){
			let opt = Object.assign({},defaults,options);

			let $self = $(this);
			let $ul;
			let lastIndex = opt.index;
			opt.len = opt.imgs.length;

			let init = ()=>{
				$self.addClass('xcarousel');
				$self.width(opt.width);
				$self.height(opt.height);

				$ul = $('<ul/>');

				let $res = $.map(opt.imgs,function(url){
					let $li = $('<li/>');
					let $img = $('<img/>');
					$img.attr('src',url).appendTo($li);
					return $li;
				});

				$ul.append($res);
				$ul.appendTo($self);

				if(opt.type === 'horizontal'){
					$ul.width(opt.width*opt.len);
					$ul.addClass('horizontal');
				}else if(opt.type === 'fade'){
					$ul.addClass('fade');
					$ul.css({
						width:opt.width,
						height:opt.height
					})
					$ul.children('li').eq(opt.index).siblings('li').css("opacity",0);
				}

				$self.on('mouseenter',()=>{
					clearInterval($self.timer);
				}).on('mouseleave',function(){
					move();
				})

				.on('click','.page span',function(){

				})

				move();
			}

			let move = ()=>{
				$self.timer = setInterval(()=>{
					opt.index++;

					show();
				},opt.duration)
			};

			let show = function(){
				if(opt.index >= opt.len){
					opt.index = 0;
				}else if(opt.index < 0){
					opt.index = opt.len - 1;
				}

				let opj = {};
				if(opt.type === 'vertical'){
					opj.top = -opt.height*opt.index;
					$ul.animate(opj);
				}else if(opt.type === 'horizontal'){
					opj.left = -opt.width*opt.index;
					$ul.animate(opj);
				}else if(opt.type === 'fade'){
					$ul.children('li').eq(opt.index).animate({opacity:1},function(){
						lastIndex = opt.index;
					});
					$ul.children('li').eq(lastIndex).animate({opacity:0},function(){
						lastIndex = opt.index;
					})
				}
			}

			init();
		})

		

		// return this;
	}
})(jQuery);
