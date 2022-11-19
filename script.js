/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

var side = document.querySelector('.side'),
    main = document.querySelector('.main');

    if(main.offsetHeight > side.offsetHeight){
	side.style.height = main.offsetHeight + "px";
    }
    if(side.offsetHeight > main.offsetHeight){
	main.style.height = side.offsetHeight + "px";
    }
