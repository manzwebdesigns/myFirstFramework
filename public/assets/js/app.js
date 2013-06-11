/**
 * Created with JetBrains PhpStorm.
 * User: bud
 * Date: 6/8/13
 * Time: 12:11 PM
 * To change this template use File | Settings | File Templates.
 */

if( typeof window.console == "undefined" ){
    window.console = {
        log : function(msg){
            var p = document.createElement("p");
            p.innerHTML = p.innerText = msg;
            document.body.appendChild( p );
        }
    };
}


console.log("one");


