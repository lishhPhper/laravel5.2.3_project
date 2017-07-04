(function(window){var svgSprite="<svg>"+""+'<symbol id="icon-icon" viewBox="0 0 1024 1024">'+""+'<path d="M767.54821 447.784466"  ></path>'+""+'<path d="M703.58748 639.666658"  ></path>'+""+'<path d="M839.760882 387.753231 507.21809 84.47495l-1.050935 0.855484c-12.841469-13.075807-31.488155-21.309328-52.250014-21.309328-38.733163 0-70.13229 28.636201-70.13229 63.960731 0 16.33606 6.725168 31.233352 17.774829 42.537815l-0.230244 0.187265 331.152119 302.009382c23.537066 21.465894 23.537066 56.591903 0 78.057797L403.084405 851.184049l0.160659 0.13303c-12.046361 11.484565-19.460214 27.04496-19.460214 44.192501 0 35.32453 31.399127 63.960731 70.13229 63.960731 21.286816 0 40.34487-8.661264 53.206806-22.317285l0.039909 0.032746 332.597027-303.3274C913.971048 566.17997 913.971048 455.432657 839.760882 387.753231z"  ></path>'+""+"</symbol>"+""+'<symbol id="icon-dagou" viewBox="0 0 1365 1024">'+""+'<path d="M677.435733 28.951893c-265.864533 0-481.39264 215.528107-481.39264 481.39264 0 265.867947 215.528107 481.394347 481.39264 481.394347 265.867947 0 481.39264-215.5264 481.39264-481.394347 0-265.864533-215.524693-481.39264-481.39264-481.39264z m320.81408 309.261654l-383.025493 383.0272-0.01024 0.008533-0.008533 0.01024-0.080214 0.083627c-0.29696 0.293547-0.612693 0.54784-0.918186 0.827733-0.375467 0.344747-0.7424 0.70656-1.133227 1.024-0.34304 0.2816-0.703147 0.520533-1.053013 0.781653-0.390827 0.288427-0.77312 0.59392-1.17248 0.861867-0.390827 0.257707-0.800427 0.47616-1.199787 0.713387-0.380587 0.22528-0.754347 0.469333-1.143467 0.67584-0.44544 0.237227-0.90624 0.426667-1.36192 0.638293-0.3584 0.167253-0.713387 0.349867-1.078613 0.49664-0.505173 0.208213-1.020587 0.370347-1.536 0.541013-0.32768 0.114347-0.653653 0.249173-0.986453 0.346454-0.559787 0.167253-1.124693 0.285013-1.6896 0.418133-0.298667 0.06656-0.59392 0.157013-0.896 0.216747-0.63488 0.12288-1.278293 0.197973-1.92 0.279893-0.233813 0.027307-0.46592 0.075093-0.70144 0.098987-0.877227 0.085333-1.759573 0.126293-2.640214 0.126293h-0.001706c-0.877227 0-1.754453-0.039253-2.62656-0.124587-0.223573-0.022187-0.44032-0.06656-0.658774-0.093866a28.13952 28.13952 0 0 1-1.952426-0.279894c-0.264533-0.054613-0.520533-0.136533-0.78336-0.191146-0.59904-0.13312-1.194667-0.262827-1.78176-0.4352-0.295253-0.08704-0.58368-0.20992-0.877227-0.303787-0.546133-0.18432-1.09568-0.356693-1.636693-0.575147-0.3072-0.121173-0.602453-0.279893-0.90624-0.418133-0.510293-0.2304-1.027413-0.44544-1.52576-0.708267-0.31744-0.165547-0.61952-0.366933-0.930134-0.544426-0.47104-0.267947-0.948907-0.529067-1.406293-0.82944-0.315733-0.206507-0.6144-0.45056-0.923307-0.674134-0.4352-0.31232-0.87552-0.612693-1.297066-0.950613-0.29184-0.242347-0.56832-0.51712-0.853334-0.768-0.395947-0.349867-0.800427-0.68096-1.181013-1.05984L356.717227 503.872853c-10.78272-10.682027-10.866347-28.081493-0.18432-38.864213 10.68032-10.78272 28.081493-10.866347 38.864213-0.18432l200.203947 198.311253 363.782826-363.784533c10.73152-10.734933 28.132693-10.734933 38.86592 0 10.729813 10.728107 10.729813 28.127573 0 38.862507z"  ></path>'+""+"</symbol>"+""+"</svg>";var script=function(){var scripts=document.getElementsByTagName("script");return scripts[scripts.length-1]}();var shouldInjectCss=script.getAttribute("data-injectcss");var ready=function(fn){if(document.addEventListener){if(~["complete","loaded","interactive"].indexOf(document.readyState)){setTimeout(fn,0)}else{var loadFn=function(){document.removeEventListener("DOMContentLoaded",loadFn,false);fn()};document.addEventListener("DOMContentLoaded",loadFn,false)}}else if(document.attachEvent){IEContentLoaded(window,fn)}function IEContentLoaded(w,fn){var d=w.document,done=false,init=function(){if(!done){done=true;fn()}};var polling=function(){try{d.documentElement.doScroll("left")}catch(e){setTimeout(polling,50);return}init()};polling();d.onreadystatechange=function(){if(d.readyState=="complete"){d.onreadystatechange=null;init()}}}};var before=function(el,target){target.parentNode.insertBefore(el,target)};var prepend=function(el,target){if(target.firstChild){before(el,target.firstChild)}else{target.appendChild(el)}};function appendSvg(){var div,svg;div=document.createElement("div");div.innerHTML=svgSprite;svgSprite=null;svg=div.getElementsByTagName("svg")[0];if(svg){svg.setAttribute("aria-hidden","true");svg.style.position="absolute";svg.style.width=0;svg.style.height=0;svg.style.overflow="hidden";prepend(svg,document.body)}}if(shouldInjectCss&&!window.__iconfont__svg__cssinject__){window.__iconfont__svg__cssinject__=true;try{document.write("<style>.svgfont {display: inline-block;width: 1em;height: 1em;fill: currentColor;vertical-align: -0.1em;font-size:16px;}</style>")}catch(e){console&&console.log(e)}}ready(appendSvg)})(window)