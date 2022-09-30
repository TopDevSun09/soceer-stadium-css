<link rel="stylesheet" href="includes/mvc-theme/<?= $layout ?>/football-league-standing.css?ver=<?= time() ?>">

<style>

.option-result{
  color: #2b2c2d !important;
  font-size: 18px !important;
  font-weight: 900 !important;
}
.card-body label b {
    color: #efa40e !important;
}
article h1 {
    background-image: linear-gradient(to right, #AB790D 0, #E5BA5C 75%);
}
.formTitle{
    color: #000;
    width: max-content;
    display: flex;
    margin-bottom: 10px;
    border-radius: 5px;
}
span.standingboxfilter {
    padding: 5px 10px;
    color: #000 !important;
    cursor: pointer;
}
span.standingboxfilter.active {
    background: #AB790D;
    color: #fff !important;
}
.top-scorer{
    width: 352px;
    margin-left: 17px;
    background: #fff;
    border-radius: 12px;
    opacity: 1 !important;
    padding :0 !important;
    margin : 0 !important
}
.top-score-h1{
    height: 40px;
    line-height: 40px;
    margin-left: 15px;
    margin-right: 15px;
    border-bottom: 1px solid #eee;
    font-size: 14px;
}
.top-score-title{
  font-weight: 900;
  overflow: hidden;
  white-space: nowrap;
  text-overflow: ellipsis;
}
.top-scorer .head.heda-title {
    height: 40px;
    background: #f7f3e7;
    font-size: 12px;
    padding-right: 15px;
    padding-left: 15px;
    justify-content: space-between !important;
    align-items: center;
    display: flex;
    margin-top: 8px;
}
.rbox {
    width: 5%;
}
.pllsame {
    display: flex;
    flex-shrink: 0;
    box-sizing: border-box;
    justify-content: center;
    align-items: center;
}
.pbox {
    justify-content: flex-start !important;
    margin-left: 4px;
    flex: 0.98;
}
.gbox, .hgbox, .agbox {
    width: 10%;
}
.l_players_mainbox {
    min-height: 569px;
    padding: 0px 15px;
    max-height: 569px;
    overflow: auto;
}
.l_players_mainbox .head.data-list {
    height: 56px;
    border-bottom: 1px solid #eee;
    background: #fff;
    font-size: 12px !important;
    color: #333 !important;
    display: flex;
}
.l_players_mainbox .lpm_itembox {
    display: flex;
    flex-shrink: 0;
    box-sizing: border-box;
    justify-content: center;
    align-items: center;
}
.l_players_mainbox .row1 {
    width: 5%;
    color: #999;
}
.l_players_mainbox .row2.lpm_itembox {
    justify-content: flex-start !important;
    margin-left: 4px;
    flex: 1;
}
.pl2i_imgbox {
    width: 36px;
    height: 36px;
    border: 1px solid #d9d9d9;
    border-radius: 50%;
    overflow: hidden;
    font-size: 0;
    flex-shrink: 0;
    margin-right: 10px;
}
.pl2i_imgbox img {
    -o-object-fit: cover;
    object-fit: cover;
    width: 100%;
    height: 100%;
}
.pl2i_conbox1 {
    color: #f7bc45;
    font-weight: bold;
    line-height:17.1429px;
}
.pl2i_conbox2{
  line-height:17.1429px;
}
.l_players_mainbox .row3.lpm_itembox, .l_players_mainbox .row4.lpm_itembox, .l_players_mainbox .row5.lpm_itembox {
    width: 10%;
}
.info-content .head {
    display: -webkit-box;
    display: -ms-flexbox;
    display: flex;
    -webkit-box-align: center;
    -ms-flex-align: center;
    align-items: center;
    height: 44.625px;
    background: #f7f3e7;
    border: 0.005208rem solid #dddddd;
}
.info-content .head>div {
    height: 46.208px;
    display: -webkit-box;
    display: -ms-flexbox;
    display: flex;
    -webkit-box-align: center;
    -ms-flex-align: center;
    align-items: center;
    font-size: 12.7499px;
}
.info-content .head>div.row1 {
    width: 27.083px;
    -webkit-box-pack: center;
    -ms-flex-pack: center;
    justify-content: center;
    color: #333;
    font-weight: bold;
}
.info-content .head.heda-title>div.row1 {
    color: #666;
}
.info-content .head>div.row2 {
    width: 143.432px;
    padding-left: 34.266px;
    color: #333;
    font-weight: bold;
}
.info-content .head>div.row2 {
    width: 143.432px !important;
}
.info-content .head>div.row2 {
    color: #666 !important;
    font-weight: normal;
}
.info-content .head>div.row3 {
    border-left: 0.792px solid #dddddd;
    border-right: 0.792px solid #dddddd;
    width: 164.166px;
    padding: 0 15.938px;
}
.info-content .head>div.row3 span {
    -webkit-box-flex: 1;
    -ms-flex: 1;
    flex: 1;
    text-align: center;
}
.info-content .head>div.row3 span:nth-child(1) {
    color: #333333;
}
.info-content .head>div.row3 span:nth-child(2) {
    color: #457331;
}
.info-content .head>div.row3 span:nth-child(3) {
    color: #f6b223;
}
.info-content .head>div.row3 span:nth-child(4) {
    color: #f6232d;
}
.info-content .head>div.row4 {
    width: 73.313px;
    -webkit-box-pack: center;
    -ms-flex-pack: center;
    justify-content: center;
    border-right: 0.792px solid #dddddd;
    color: #333333;
}
.info-content .head>div.row5 {
    color: #333333;
    -ms-flex-wrap: wrap;
    flex-wrap: wrap;
    width: 179.291px;
    border-right: 0.792px solid #dddddd;
    -webkit-box-pack: center;
    -ms-flex-pack: center;
    justify-content: center;
    flex-wrap: wrap;
    -ms-flex-line-pack: center;
    align-content: center;
}
.info-content .head>div.row5 span {
    width: 100%;
    text-align: center;
}
.info-content .head>div.row5 i {
    width: 0.3125rem;
    height: 0.057292rem;
    background: url(data:image/svg+xml;base64,PD94bWwgdmVyc2lvbj0iMS4wIiBlbmNvZGluZz0iVVRGLTgiIHN0YW5kYWxvbmU9Im5vIj8+DQo8IURPQ1RZUEUgc3ZnIFBVQkxJQyAiLS8vVzNDLy9EVEQgU1ZHIDEuMS8vRU4iICJodHRwOi8vd3d3LnczLm9yZy9HcmFwaGljcy9TVkcvMS4xL0RURC9zdmcxMS5kdGQiPg0KPHN2ZyB2ZXJzaW9uPSIxLjEiIGlkPSJMYXllcl8xIiB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciIHhtbG5zOnhsaW5rPSJodHRwOi8vd3d3LnczLm9yZy8xOTk5L3hsaW5rIiB4PSIwcHgiIHk9IjBweCIgd2lkdGg9IjY0cHgiIGhlaWdodD0iMTFweCIgdmlld0JveD0iMCAwIDY0IDExIiBlbmFibGUtYmFja2dyb3VuZD0ibmV3IDAgMCA2NCAxMSIgeG1sOnNwYWNlPSJwcmVzZXJ2ZSI+ICA8aW1hZ2UgaWQ9ImltYWdlMCIgd2lkdGg9IjY0IiBoZWlnaHQ9IjExIiB4PSIwIiB5PSIwIg0KICAgIGhyZWY9ImRhdGE6aW1hZ2UvcG5nO2Jhc2U2NCxpVkJPUncwS0dnb0FBQUFOU1VoRVVnQUFBRUFBQUFBTENBUUFBQUJsLzBQNkFBQUFCR2RCVFVFQUFMR1BDL3hoQlFBQUFDQmpTRkpODQpBQUI2SmdBQWdJUUFBUG9BQUFDQTZBQUFkVEFBQU9wZ0FBQTZtQUFBRjNDY3VsRThBQUFBQW1KTFIwUUEvNGVQekw4QUFBQUhkRWxODQpSUWZsQnhNWEt5VmV6SmdyQUFBQWUwbEVRVlE0eThYVXJRMENVUkJGNFc4bld3VWVCQ1FZekQ0UEhnTmJFWVVnSVNTVThRd0dnU0FVDQpRQmtnK0NsaFo2NFpkMDZ1dUY0KzZaYS9iOWdFVU9iMlVpNisrSU5SamtCTG1Ua1o1K0NKc25ETXc5TjBaK3M4UEsyZGlTblVKa01nDQo2c1hXSTYrQm9ONXMzQk1GcUZlOVo1TEJmd2xYT1V2NEJxWWNqbXRJYzZGRUFBQUFKWFJGV0hSa1lYUmxPbU55WldGMFpRQXlNREl4DQpMVEEzTFRFNVZERTFPalF6T2pNM0t6QTRPakF3WGdYSGdnQUFBQ1YwUlZoMFpHRjBaVHB0YjJScFpua0FNakF5TVMwd055MHhPVlF4DQpOVG8wTXpvek55c3dPRG93TUM5WWZ6NEFBQUFnZEVWWWRITnZablIzWVhKbEFHaDBkSEJ6T2k4dmFXMWhaMlZ0WVdkcFkyc3ViM0puDQp2TThkblFBQUFCaDBSVmgwVkdoMWJXSTZPa1J2WTNWdFpXNTBPanBRWVdkbGN3QXhwLys3THdBQUFCZDBSVmgwVkdoMWJXSTZPa2x0DQpZV2RsT2pwSVpXbG5hSFFBTVRHRHk4dk1BQUFBRm5SRldIUlVhSFZ0WWpvNlNXMWhaMlU2T2xkcFpIUm9BRFkwUkU5cENRQUFBQmwwDQpSVmgwVkdoMWJXSTZPazFwYldWMGVYQmxBR2x0WVdkbEwzQnVaeit5Vms0QUFBQVhkRVZZZEZSb2RXMWlPanBOVkdsdFpRQXhOakkyDQpOamd3TmpFM1JpRTlxQUFBQUJGMFJWaDBWR2gxYldJNk9sTnBlbVVBTWpFNVFrSnpBUEdPQUFBQVJuUkZXSFJVYUhWdFlqbzZWVkpKDQpBR1pwYkdVNkx5OHZZWEJ3TDNSdGNDOXBiV0ZuWld4akwybHRaM1pwWlhjeVh6bGZNVFl5TmpZM09USXhNalEzTURFNU9USmZPVEZmDQpXekJkdnU0U1ZnQUFBQUJKUlU1RXJrSmdnZz09IiA+PC9pbWFnZT4NCjwvc3ZnPg0K) no-repeat;
    background-size: 100% 100%;
}
.info-content .head>div.row6 {
    font-size: 12.7499px;
    -webkit-box-pack: center;
    -ms-flex-pack: center;
    justify-content: center;
    font-weight: 500;
    color: #454545;
    -webkit-box-flex: 1;
    -ms-flex: 1;
    flex: 1;
}

.info-content .head.data-list {
    background: #ffffff;
    border-top: none;
    cursor: pointer;
}
.info-content .head.data-list.active,.info-content .head.data-list:hover {
    background: #f1f1f1;
}
.info-content .head.data-list>div.row5 {
    -webkit-box-pack: justify;
    -ms-flex-pack: justify;
    justify-content: space-between;
    padding:0 15.938px;
}
.info-content .head.data-list>div.row5 b {
    width: 17.521px;
    height: 17.521px;
}
.info-content .head.data-list>div.row5 b.ww {
    background: url(includes/images/ww.svg) no-repeat;
    background-size: 100% 100%;
}
.info-content .head.data-list>div.row5 b.ll {
    background: url(data:image/svg+xml;base64,PD94bWwgdmVyc2lvbj0iMS4wIiBlbmNvZGluZz0idXRmLTgiPz4NCjwhLS0gR2VuZXJhdG9yOiBBZG9iZSBJbGx1c3RyYXRvciAyNC4xLjMsIFNWRyBFeHBvcnQgUGx1Zy1JbiAuIFNWRyBWZXJzaW9uOiA2LjAwIEJ1aWxkIDApICAtLT4NCjxzdmcgdmVyc2lvbj0iMS4xIiBpZD0iTGF5ZXJfMSIgeG1sbnM9Imh0dHA6Ly93d3cudzMub3JnLzIwMDAvc3ZnIiB4bWxuczp4bGluaz0iaHR0cDovL3d3dy53My5vcmcvMTk5OS94bGluayIgeD0iMHB4IiB5PSIwcHgiDQoJIHZpZXdCb3g9IjAgMCAxNTAgMTUwIiBzdHlsZT0iZW5hYmxlLWJhY2tncm91bmQ6bmV3IDAgMCAxNTAgMTUwOyIgeG1sOnNwYWNlPSJwcmVzZXJ2ZSI+DQo8c3R5bGUgdHlwZT0idGV4dC9jc3MiPg0KCS5zdDB7ZmlsbDojODZCRTU3O30NCgkuc3Qxe2ZpbGw6IzFFQkJFODt9DQoJLnN0MntmaWxsOiNGMkFGMUM7fQ0KCS5zdDN7ZmlsbDojRUQzMzI3O30NCgkuc3Q0e2ZpbGw6I0VDMzYyNzt9DQoJLnN0NXtmaWxsOiM2OUQxNzM7fQ0KCS5zdDZ7ZmlsbDojRkZGRkZGO30NCgkuc3Q3e2ZpbGw6I0VCRUFFQzt9DQoJLnN0OHtmaWxsOiNEQUQ5REQ7fQ0KCS5zdDl7ZmlsbDojRkY1MjUyO30NCgkuc3QxMHtmaWxsOiNGNDQwNDA7fQ0KCS5zdDExe2ZpbGw6bm9uZTtzdHJva2U6IzNFQjg2MjtzdHJva2Utd2lkdGg6NjtzdHJva2UtbWl0ZXJsaW1pdDoxMDt9DQoJLnN0MTJ7ZmlsbDojM0NCNzZFO30NCgkuc3QxM3tmaWxsOm5vbmU7c3Ryb2tlOiNGRjNFMzE7c3Ryb2tlLXdpZHRoOjY7c3Ryb2tlLW1pdGVybGltaXQ6MTA7fQ0KCS5zdDE0e2ZpbGw6I0ZGM0UzMTt9DQoJLnN0MTV7ZmlsbDojRjQzNjE2O30NCgkuc3QxNntmaWxsOiM0M0JDMkE7fQ0KCS5zdDE3e2ZpbGw6I0UwMjIyMjt9DQoJLnN0MTh7ZmlsbDpub25lO3N0cm9rZTojQTJBMUEwO3N0cm9rZS13aWR0aDo1O3N0cm9rZS1taXRlcmxpbWl0OjEwO30NCgkuc3QxOXtmaWxsOiNFRjU0NDE7fQ0KCS5zdDIwe2ZpbGw6IzREQUEyMjt9DQoJLnN0MjF7ZmlsbDojRUUzQTI0O30NCgkuc3QyMntmaWxsOiM0REFBNDc7fQ0KCS5zdDIze2ZpbGw6I0Y0N0UyMDt9DQoJLnN0MjR7ZmlsbDojNkI0RTEyO30NCgkuc3QyNXtmaWxsOiM2MDYwNjA7fQ0KCS5zdDI2e2ZpbGw6I0RERERERDt9DQoJLnN0Mjd7ZmlsbDojRjA1QTY0O30NCgkuc3QyOHtlbmFibGUtYmFja2dyb3VuZDpuZXcgICAgO30NCgkuc3QyOXtmaWxsOiM0REI2MzQ7fQ0KCS5zdDMwe2ZpbGw6I0Y0QjM0Mjt9DQo8L3N0eWxlPg0KPGNpcmNsZSBjbGFzcz0ic3QyNyIgY3g9Ijc1IiBjeT0iNzUiIHI9IjcyLjYiLz4NCjxnIGNsYXNzPSJzdDI4Ij4NCgk8cGF0aCBjbGFzcz0ic3Q2IiBkPSJNNDMuNCwxMjQuN1YyNi42SDY1djc4LjZoNDguOXYxOS41SDQzLjR6Ii8+DQo8L2c+DQo8L3N2Zz4NCg==) no-repeat;
    background-size: 100% 100%;
}
.info-content .head.data-list>div.row5 b.dd {
    background: url(includes/images/dd.svg) no-repeat;
    background-size: 100% 100%;
}



.page-title .info-wrap .info-head {
   background: #fff;
   margin: 0 auto;
   padding: 20.719px;
}
.page-title .info-wrap{
  max-width:1200px;
}
.page-title .info-head .info-head-wrap {
   width: 100%;
   margin: 0 auto;
   display: -webkit-box;
   display: -ms-flexbox;
   display: flex;
   padding-bottom: 0.135417rem;
}
.page-title .info-wrap .info-head .info-head-wrap .info-left {
   justify-content: space-between !important;
}
.page-title .info-wrap .info-head .info-head-wrap .info-left {
   -webkit-box-flex: 1;
   -ms-flex: 1;
   flex: 1;
   display: -webkit-box;
   display: -ms-flexbox;
   display: flex;
}
.page-title .info-wrap .info-head .info-head-wrap .info-left .left-title {
   display: -webkit-box;
   display: -ms-flexbox;
   display: flex;
   -webkit-box-align: center;
   -ms-flex-align: center;
   align-items: center;
   position: relative;
}
.page-title .info-wrap .info-head .info-head-wrap .info-left .left-title>div:nth-child(1) {
   width: 84.458px;
   height: 84.458px;
   display: -webkit-box;
   display: -ms-flexbox;
   display: flex;
}
.page-title .info-wrap .info-head .info-head-wrap .info-left .left-title>div:nth-child(1) img {
   max-width: 84.458px;
}
.page-title .info-wrap .info-head .info-head-wrap .info-left .left-title>div:nth-child(2) {
   padding-left: 20.719px;
}
.page-title .info-wrap .info-head .info-head-wrap .info-left .left-title>div:nth-child(2)>div {
   display: -webkit-box;
   display: -ms-flexbox;
   display: flex;
   -webkit-box-align: center;
   -ms-flex-align: center;
   align-items: center;
}
.page-title .info-wrap .info-head .info-head-wrap .info-left .left-title>div:nth-child(2) h2 {
   font-size: 16.1924px;
   font-weight: bold;
   color: #000000;
   margin-bottom: 11.953px !important;
}

.le_h2 {
   margin: 0 !important;
}
.page-title .info-wrap .info-head .info-head-wrap .info-left .left-title .star-img {
   margin-bottom: 10.901px;
   margin-left: 15.141px;
   width: 15.135px;
   height: 16.719px;
   position: relative;
   cursor: pointer;
}
.page-title .info-wrap .info-head .info-head-wrap .info-left .left-title .star-img {
   margin-bottom: 0.07125rem !important;
}
.page-title .info-wrap .info-head .info-head-wrap .info-left .left-title .star-img svg.collect1,
.page-title .info-wrap .info-head .info-head-wrap .info-left .left-title .star-img svg.collect2 
{
   margin-top: 0px !important;
}
.page-title .info-wrap .info-head .info-head-wrap .info-left .left-title .star-img svg {
   width: 16.719px;
   height: 16.719px;
   position: absolute;
   left: 0%;
   top: 0%;
   display: block;
}
.page-title .info-wrap .info-head .info-head-wrap .info-left .left-title .star-img .collect2 {
   -webkit-clip-path: ellipse(var(--icon-circle) var(--icon-circle) at 0% 100%);
   clip-path: ellipse(var(--icon-circle) var(--icon-circle) at 0% 100%);
}
.page-title .collect1 .st0 {
   fill: #999999;
}
.page-title .collect1 .st1 {
   fill: #bbbbbb;
}
.page-title .collect1 .st2 {
   fill: #ffffff;
}
body .page-title .collect2 .st0, body #app .collect2 .st1 {
   fill: #f8bc3d !important;
}
body .page-title .collect2 .st0, body #app .collect2 .st1 {
   fill: #f8bc3d !important;
}
.page-title .collect2 .st2 {
   fill: #ffffff;
}

.page-title .info-wrap .info-head .info-head-wrap .info-left .left-title>div:nth-child(2)>div img {
   width: 22.302px;
   height: 22.302px;
   margin-right: 3.984px;
}
.page-title .info-wrap .info-head .info-head-wrap .info-left .left-title>div:nth-child(2)>div b {
   font-size: 13.5469px;
   font-weight: 300;
   color: #000000;
}
.page-title .info-wrap .europe-select {
   width: 87.656px;
   margin-left: 6.375px;
}
.el-select {
   display: inline-block;
   position: relative;
}
.page-title .info-wrap .europe-select .el-input--mini {
   font-size: 13.5469px;
}
.el-select>.el-input {
   display: block;
}
.el-input {
   position: relative;
   width: 100%;
}
.page-title .info-wrap .europe-select .el-input--mini .el-input__inner{
   color: #AB790D !important;
}
.page-title .info-wrap .europe-select .el-input--mini .el-input__inner {
   padding-top: 0.005208rem;
}
.el-input__inner {
   -webkit-appearance: none;
   background-color: #FFF;
   background-image: none;
   border-radius: 0.020833rem;
   border: 0.005208rem solid #DCDFE6;
   -webkit-box-sizing: border-box;
   box-sizing: border-box;
   color: #606266;
   display: inline-block;
   font-size: inherit;
   height: 0.208333rem;
   line-height: 0.208333rem;
   outline: 0;
   padding: 0.797px 27.891px 0.792px 11.953px;
   -webkit-transition: border-color 0.2s cubic-bezier(0.645, 0.045, 0.355, 1);
   transition: border-color 0.2s cubic-bezier(0.645, 0.045, 0.355, 1);
   width: 100%;
}
.el-input--mini .el-input__inner {
   height: 19.922px;
   line-height: 0.145833rem;
}
.el-input.is-disabled .el-input__inner {
    background-color: #F5F7FA; 
    border-color: #E4E7ED; 
    color: #C0C4CC; 
    cursor: not-allowed; 
}
.el-icon-arrow-up:before {
   
}
.page-title input {
   outline: none;
   -webkit-appearance: none;
   -webkit-tap-highlight-color: rgba(0,0,0,0);
}

.page-title .info-wrap .info-head .info-head-wrap .right-title {
   width: 500px;
   height: 80px;
   border-radius: 9px;
   border: 1px solid #cbccce;
   transform: scale(.85);
   transform-origin: right;
   flex-direction: column;
   display: flex;
}
.right-title-inheadingbox {
   font-size: 13px !important;
   width: 100%;
   height: 22px;
   background-image: linear-gradient(to right, #AB790D 0, #E5BA5C 75%);
   border-radius: 8px 8px 0 0;
   line-height: 22px;
   text-align: center;
   color: #fff;
   font-weight: bold;
}
.mrmib_firstbox {
   width: 65px;
}
.mrmib_f_1 {
   margin-bottom: 4px;
   font-size: 12px !important;
   color: #666;
}
.mrmib_f_2 {
   color: #2b2c2d;
   font-size: 18px;
   font-weight: 900;
}
.flex-1 {
   text-align: center;
}
.mrmib_f_1 {
   margin-bottom: 4px;
   font-size: 12px !important;
   color: #666;
}
.mrmib_f_2 {
   color: #2b2c2d;
   font-size: 18px;
   font-weight: 900;
}
.main-right-main-item-box.gg {
   padding-right: 15px;
   padding-left: 15px;
   display: flex;
   justify-content: space-between;
   align-items: center;
   flex: 1;
}
.last_item_box .mrmib_f_2 {
   color: #efa40e !important;
}



.league-info{
    width: 352px;
    background: #fff;
    border-radius: 12px;
    opacity: 1 !important;
}
.pl2i_headingbox {
    height: 40px;
    line-height: 40px;
    margin-left: 15px;
    margin-right: 15px;
    border-bottom: 1px solid #eee;
    font-size: 14px;
}
.pl2i_h_span {
    font-weight: 900;
    overflow: hidden;
    white-space: nowrap;
    text-overflow: ellipsis;
}
.pl2i_ib_teambox {
    padding: 0 17px;
    border-bottom: 1px solid #eee;
}
.pl2i_ib_teamboxspan {
    width: 125px;
    height: 114px;
    color: #000;
    text-align: center;
    justify-content: center;
    align-items: center;
    display: flex;
    flex-direction: column;
    margin: 0 auto;
}
.pl2i_ib_teamboxspan img {
    width: 40px;
    height: 40px;
    -o-object-fit: contain;
    object-fit: contain;
}
.pl2i_ib_teamboxspan1 {
    line-height: 24px;
    height: 24px;
    margin-top: 8px;
    overflow: hidden;
    white-space: nowrap;
    text-overflow: ellipsis;
    width: 100%;
    font-size: 14px !important;
    text-align: center;
    font-weight:900;
}
.pl2i_ib_teamboxspan2 {
    margin-top: 1px;
    font-size: 12px !important;
    color: #999;
    font-weight:800;
}
.pl2i_most_vbox {
    border-bottom: 1px solid #eee;
    margin-top: 15px;
    display: block;
    font-size: 12px !important;
    padding: 15px;
    padding-top: 0px;
}
.pl2i_most_vbox1 {
    font-weight: 900;
    font-size: 12px !important;
}
.pl2i_most_vbox2 {
    height: 32px;
    margin-top: 15px;
    display: flex;
    align-items: center;
    font-weight: 900;
}
.pl2i_most_vbox2div1 {
    height: 100%;
    flex: 1;
    justify-content: space-around;
    flex-direction: column;
    display: flex;
}
.pl2i_most_vbox2div1span1 {
    color: #000;
}
.pl2i_most_vbox2div2 {
    width: 60px;
    font-weight: 900;
}
.pl2i_container_box {
    border-bottom: 0;
    padding-bottom: 0;
    margin-top: 15px;
    font-size: 12px !important;
    padding: 15px;
    padding-top: 0px;
}
.pl2i_infobox1 {
    margin-bottom: 10px;
    font-size: 12px !important;
}
.pl2i_infflex1 {
    box-shadow: 0 1px 0 0 #e3e0e0 !important;
    height: auto !important;
    line-height: 24px;
    justify-content: space-between !important;
    display: flex;
    font-size: 12px !important;
    margin-top: 6px;
    padding-bottom: 4px;
}
.pl2i_infflex1div1 {
    color: #999;
}
.pl2i_infflex1div2 {
    display: block;
}

/* .footer *{
  font-size:12px;
} */
.heda-title *{
  font-weight:600;
}
.l_players_mainbox * {
    font-weight: 600;
}

.page-title{
  --icon-circle: 0%;
    padding-bottom: 0px !important;
    padding-top: 0px !important;
    margin-top:0px;
    margin-bottom:0px;
}
article{
  margin-left:0px !important;
  width:100% !important;
}
.top-scorer{
  width:100% !important;
}

.content{
  width:1200px !important;
}

</style>
<script type="text/javascript" src="includes/js/openTab.js"></script>


    <div class="panel_details">
        



  <section class="page-title">
    <div class="info-wrap container-fluid">
      <div class="info-head">
        <div class="info-head-wrap">
            <div class="info-left">
              <div class="left-title">
                <div>
                  <img class="le_img" src="https://www.a8livetv.com/api/images/football/league/logo/164577482086.png">
                </div>

                <div>
                  <div>
                    <h2 class="le_h2">English Premier League</h2>
                    <i class="star-img star_imgbox ">
                      <svg viewBox="0 0 150 150" class="collect1">
                        <path d="M120.99,144.34H29.01c-9.05,0-16.38-7.34-16.38-16.38V26.89c0-9.05,7.34-16.38,16.38-16.38h91.99
                          c9.05,0,16.38,7.34,16.38,16.38v101.06C137.38,137,130.04,144.34,120.99,144.34z" class="st0">
                        </path> 
                        <path d="M120.99,139.5H29.01c-9.05,0-16.38-7.34-16.38-16.38V22.05c0-9.05,7.34-16.38,16.38-16.38h91.99
                          c9.05,0,16.38,7.34,16.38,16.38v101.06C137.38,132.16,130.04,139.5,120.99,139.5z" class="st1">
                        </path> 
                        <path d="M124.3,60.98c-0.65-2.01-2.43-3.43-4.53-3.62l-28.61-2.6L79.84,28.29c-0.83-1.94-2.73-3.2-4.84-3.2
                          s-4.01,1.26-4.84,3.2L58.84,54.76l-28.61,2.6c-2.1,0.19-3.88,1.62-4.53,3.62c-0.65,2.01-0.05,4.21,1.54,5.6l21.62,18.96l-6.38,28.09
                          c-0.47,2.06,0.33,4.2,2.05,5.44c0.92,0.67,2,1,3.08,1c0.94,0,1.87-0.25,2.7-0.75L75,104.57l24.67,14.74
                          c1.8,1.08,4.08,0.99,5.79-0.25c1.71-1.24,2.52-3.37,2.05-5.44l-6.38-28.09l21.62-18.96C124.35,65.19,124.95,62.99,124.3,60.98z" class="st2">
                        </path>
                      </svg> 
                      <svg viewBox="0 0 150 150" class="collect2">
                        <path d="M120.99,144.34H29.01c-9.05,0-16.38-7.34-16.38-16.38V26.89c0-9.05,7.34-16.38,16.38-16.38h91.99
                          c9.05,0,16.38,7.34,16.38,16.38v101.06C137.38,137,130.04,144.34,120.99,144.34z" class="st0">
                        </path> 
                        <path d="M120.99,139.5H29.01c-9.05,0-16.38-7.34-16.38-16.38V22.05c0-9.05,7.34-16.38,16.38-16.38h91.99
                          c9.05,0,16.38,7.34,16.38,16.38v101.06C137.38,132.16,130.04,139.5,120.99,139.5z" class="st1">
                        </path> 
                        <path d="M124.3,60.98c-0.65-2.01-2.43-3.43-4.53-3.62l-28.61-2.6L79.84,28.29c-0.83-1.94-2.73-3.2-4.84-3.2
                          s-4.01,1.26-4.84,3.2L58.84,54.76l-28.61,2.6c-2.1,0.19-3.88,1.62-4.53,3.62c-0.65,2.01-0.05,4.21,1.54,5.6l21.62,18.96l-6.38,28.09
                          c-0.47,2.06,0.33,4.2,2.05,5.44c0.92,0.67,2,1,3.08,1c0.94,0,1.87-0.25,2.7-0.75L75,104.57l24.67,14.74
                          c1.8,1.08,4.08,0.99,5.79-0.25c1.71-1.24,2.52-3.37,2.05-5.44l-6.38-28.09l21.62-18.96C124.35,65.19,124.95,62.99,124.3,60.98z" class="st2">
                        </path>
                      </svg>
                    </i>
                  </div>
                  <div>
                    <img alt="" class="le_img_c" src="https://www.a8livetv.com/api/images/football/country/logo/england.svg">
                    <b class="le_countryname">England</b>

                    <div class="el-select europe-select el-select--mini">
                      <div class="el-input el-input--mini is-disabled el-input--suffix">
                        <input type="text" disabled="disabled" readonly="readonly" autocomplete="off" placeholder="21/22" class="el-input__inner">
                          <span class="el-input__suffix">
                            <span class="el-input__suffix-inner">
                              <i class="el-select__caret el-input__icon el-icon-arrow-up">
                              </i>
                            </span>
                          </span>
                        </div>

                  </div>
                </div>
              </div>
              </div>
            </div>

            <div class="right-title"> 

              <div class="right-title-headingbox">
                <div class="right-title-inheadingbox">
                  21-22 PREM STATS
                </div>
              </div>

              <div class="main-right-main-item-box gg">
                <div class="mrmib_firstbox">
                  <div class="mrmib_f_1">Players</div>
                  <div class="mrmib_f_2">629</div>
                </div>
                <div class="flex-1">
                  <div class="mrmib_f_1">Foreign players</div>
                  <div class="mrmib_f_2">547</div>
                </div>
                <div class="flex-1">
                  <div class="mrmib_f_1">Number of teams</div>
                  <div class="mrmib_f_2">20</div>
                </div>
                <div class="flex-1 last_item_box">
                  <div class="mrmib_f_1">Total market value</div>
                  <div class="mrmib_f_2">€ 784408</div>
                </div>
              </div>

            </div>
        </div>

      </div> 

    </div>
    
    
    <!-- <div class="container">
      <div class="row">
        <div class="col-md-7">
          <div class="d-flex align-items-center">
            <div class="logo">
              <img src="https://www.a8livetv.com/api/images/football/league/logo/163910523528.jpg" alt="">
            </div>
            <div class="title-detail">
              <div class="league-name">
                <h2 class="title">UEFA Champions League</h2>
				
				<a href="#." class="star"><i class="fa-solid fa-angle-down"></i></a>
                <a href="#." class="star"><i class="fa-solid fa-star"></i></a>
              </div>
              <div class="league-location">
                <img src="https://www.a8livetv.com/api/images/football/country/logo/europe.svg" height="27" alt="">
                
              </div>
              <div>
              <h2 class="league-title">Europe</h2>  
              <select class="form-control disabled" disabled>
                  <option>21/22</option>
              </select>
              </div>
            </div>
          </div>
        </div>
        <div class="col-md-5">
          <div class="page-card">
            <div class="card-head">
              <h5>21-22 PREM STATS</h5>
            </div>
            <div class="card-body">
              <div>
                <label class="option">Players</label>
                <label class="option-result">629</label>
              </div>
              <div>
                <label class="option">Foreign players</label>
                <label class="option-result">629</label>
              </div>
              <div>
                <label class="option">Number of teams</label>
                <label class="option-result">629</label>
              </div>
              <div>
                <label class="option">Total market value</label>
                <label class="option-result"><b>$784408</b></label>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>  -->

    

  </section>
  <section>
    <div class="container-fluid content">
      <div class="row">
        <div class="col-md-8">
          <article>
            <h1 class="container-title">Standings</h1>
            <div class="main-tab">
              <div class="tabs">
                <div class="tabs-header">
                  <!-- <ul>
                    <li onclick="openTab(event, 'all')" class="tabs-item active">
                      <a>All</a>
                    </li>
                    <li onclick="openTab(event, 'home')" class="tabs-item">
                      <a>Home</a>
                    </li>
                    <li onclick="openTab(event, 'away')" class="tabs-item">
                      <a>Away</a>
                    </li>
                  </ul>  -->
                  <div class="formTitle">
                    <span id="alltab" class="standingboxfilter active" onclick="TabOpened();openTab(event, 'all');">All</span>
                    <span class="standingboxfilter" onclick="TabOpened();openTab(event, 'home');">Home</span>
                    <span class="standingboxfilter" onclick="TabOpened();openTab(event, 'away');">Away</span>
                  </div>
                </div>
              </div>
              <!-- INFO CONTENT START -->
              <div class="info-content">
                <div class="tabs-body">

                  <div id="all" class="tab-content">
                    <div class="head heda-title">
                      <div class="row1">#</div>
                      <div class="row2">Team</div>
                      <div class="row3">
                        <span>P</span> 
                        <span>W</span> 
                        <span>D</span> 
                        <span>L</span>
                      </div>
                      <div class="row4">Goals</div>
                      <div class="row5">
                        <span>Last5</span> 
                        <i></i>
                      </div>
                      <div class="row6">Points</div>
                    </div>

                    <div class="head data-list">
                      <div class="row1">1</div> 
                      <div class="row2">Arsenal</div> 
                      <div class="row3">
                        <span>7</span> 
                        <span>6</span> 
                        <span>0</span> 
                        <span>1</span>
                      </div> 
                      <div class="row4">17:7</div> 
                      <div class="row5">
                        <b class="ww"></b> 
                        <b class="ww"></b> 
                        <b class="ww"></b> 
                        <b class="ww"></b> 
                        <b class="ll"></b> 
                      </div> 
                      <div class="row6">18</div>
                    </div>

                    <div class="head data-list">
                      <div class="row1">2</div> 
                      <div class="row2">Manchester City</div> 
                      <div class="row3">
                        <span>7</span> 
                        <span>5</span> 
                        <span>2</span> 
                        <span>0</span>
                      </div> 
                      <div class="row4">23:6</div> 
                      <div class="row5">
                        <b class="ww"></b> 
                        <b class="dd"></b> 
                        <b class="ww"></b> 
                        <b class="ww"></b> 
                        <b class="dd"></b> 
                      </div> 
                      <div class="row6">17</div>
                    </div>
                  </div>  

                  

                  <!-- <div class="table-responsive">
                    <table class="table">
                      <thead class="team-title">
                        <tr>
                          <th>
                            <table class="table">
                              <tr>
                                <td class="sr">#</td>
                                <td class="teams">Team</td>
                              </tr>
                            </table>
                          </th>
                          <th>
                            <ul>
                              <li>P</li>
                              <li>W</li>
                              <li>D</li>
                              <li>L</li>
                            </ul>
                          </th>
                          <th>
                            <table class="table">
                              <tbody>
                                <tr>
                                  <td class="goals">Goals</td>
                                  <td class="results">Last5 <br> <img src="includes/images/arrow.png" alt=""></td>
                                </tr>
                              </tbody>
                            </table>
                          </th>
                          <th class="text-center">Points</th>
                        </tr>
                      </thead>
                      <tbody>
                        <tr>
                          <td>
                            <table class="table">
                              <tr>
                                <td class="sr">1</td>
                                <td class="teams">Buffalo Bills</td>
                              </tr>
                            </table>
                          </td>
                          <td>
                            <ul>
                              <li>7</li>
                              <li>5</li>
                              <li>2</li>
                              <li>0</li>
                            </ul>
                          </td>
                          <td>
                            <table class="table">
                              <tbody>
                                <tr>
                                  <td class="goals">17:7</td>
                                  <td class="results">
                                    <ul class="last-5">
                                      <li class="green">W</li>
                                      <li class="green">W</li>
                                      <li class="green">W</li>
                                      <li class="green">W</li>
                                      <li class="red">L</li>
                                    </ul>
                                  </td>
                                </tr>
                              </tbody>
                            </table>
                          </td>
                          <td class="text-center">18</td>
                        </tr>
                        <tr>
                          <td>
                            <table class="table sub-table">
                              <tr>
                                <td class="sr">2</td>
                                <td class="teams">Cincinnati Bengals</td>
                              </tr>
                              <tr>
                                <td class="sr">3</td>
                                <td class="teams">Dallas Cowboys</td>
                              </tr>
                              <tr>
                                <td class="sr">4</td>
                                <td class="teams">Arizona Cardinals</td>
                              </tr>
                            </table>
                          </td>
                          <td class="group-list">
                            <ul>
                              <li>7</li>
                              <li>5</li>
                              <li>2</li>
                              <li>0</li>
                            </ul>
                            <ul>
                              <li>7</li>
                              <li>5</li>
                              <li>2</li>
                              <li>0</li>
                            </ul>
                            <ul>
                              <li>7</li>
                              <li>5</li>
                              <li>2</li>
                              <li>0</li>
                            </ul>
                          </td>
                          <td>
                            <table class="table">
                              <tbody>
                                <tr>
                                  <td class="goals group-data">17:7<br>17:7<br>17:7</td>
                                  <td class="results group-list">
                                    <ul class="last-5">
                                      <li class="green">W</li>
                                      <li class="green">W</li>
                                      <li class="yellow">D</li>
                                      <li class="green">W</li>
                                      <li class="red">L</li>
                                    </ul>
                                    <ul class="last-5">
                                      <li class="green">W</li>
                                      <li class="green">W</li>
                                      <li class="green">W</li>
                                      <li class="green">W</li>
                                      <li class="red">L</li>
                                    </ul>
                                    <ul class="last-5">
                                      <li class="green">W</li>
                                      <li class="green">W</li>
                                      <li class="green">W</li>
                                      <li class="green">W</li>
                                      <li class="red">L</li>
                                    </ul>
                                  </td>
                                </tr>
                              </tbody>
                            </table>
                          </td>
                          <td class="text-center group-data">18<br>17<br>13</td>
                        </tr>
                        <tr>
                          <td>
                            <table class="table">
                              <tr>
                                <td class="sr">5</td>
                                <td class="teams">Buffalo Bills</td>
                              </tr>
                            </table>
                          </td>
                          <td>
                            <ul>
                              <li>7</li>
                              <li>5</li>
                              <li>2</li>
                              <li>0</li>
                            </ul>
                          </td>
                          <td>
                            <table class="table">
                              <tbody>
                                <tr>
                                  <td class="goals">17:7</td>
                                  <td class="results">
                                    <ul class="last-5">
                                      <li class="green">W</li>
                                      <li class="green">W</li>
                                      <li class="green">W</li>
                                      <li class="green">W</li>
                                      <li class="red">L</li>
                                    </ul>
                                  </td>
                                </tr>
                              </tbody>
                            </table>
                          </td>
                          <td class="text-center">18</td>
                        </tr>
                        <tr>
                          <td>
                            <table class="table sub-table">
                              <tr>
                                <td class="sr">6</td>
                                <td class="teams">Cincinnati Bengals</td>
                              </tr>
                              <tr>
                                <td class="sr">7</td>
                                <td class="teams">Dallas Cowboys</td>
                              </tr>
                              <tr>
                                <td class="sr">8</td>
                                <td class="teams">Arizona Cardinals</td>
                              </tr>
                            </table>
                          </td>
                          <td class="group-list">
                            <ul>
                              <li>7</li>
                              <li>5</li>
                              <li>2</li>
                              <li>0</li>
                            </ul>
                            <ul>
                              <li>7</li>
                              <li>5</li>
                              <li>2</li>
                              <li>0</li>
                            </ul>
                            <ul>
                              <li>7</li>
                              <li>5</li>
                              <li>2</li>
                              <li>0</li>
                            </ul>
                          </td>
                          <td>
                            <table class="table">
                              <tbody>
                                <tr>
                                  <td class="goals group-data">17:7<br>17:7<br>17:7</td>
                                  <td class="results group-list">
                                    <ul class="last-5">
                                      <li class="green">W</li>
                                      <li class="green">W</li>
                                      <li class="yellow">D</li>
                                      <li class="green">W</li>
                                      <li class="red">L</li>
                                    </ul>
                                    <ul class="last-5">
                                      <li class="green">W</li>
                                      <li class="green">W</li>
                                      <li class="green">W</li>
                                      <li class="green">W</li>
                                      <li class="red">L</li>
                                    </ul>
                                    <ul class="last-5">
                                      <li class="green">W</li>
                                      <li class="green">W</li>
                                      <li class="green">W</li>
                                      <li class="green">W</li>
                                      <li class="red">L</li>
                                    </ul>
                                  </td>
                                </tr>
                              </tbody>
                            </table>
                          </td>
                          <td class="text-center group-data">18<br>17<br>13</td>
                        </tr>
                        <tr>
                          <td>
                            <table class="table">
                              <tr>
                                <td class="sr">10</td>
                                <td class="teams">Buffalo Bills</td>
                              </tr>
                            </table>
                          </td>
                          <td>
                            <ul>
                              <li>7</li>
                              <li>5</li>
                              <li>2</li>
                              <li>0</li>
                            </ul>
                          </td>
                          <td>
                            <table class="table">
                              <tbody>
                                <tr>
                                  <td class="goals">17:7</td>
                                  <td class="results">
                                    <ul class="last-5">
                                      <li class="green">W</li>
                                      <li class="green">W</li>
                                      <li class="green">W</li>
                                      <li class="green">W</li>
                                      <li class="red">L</li>
                                    </ul>
                                  </td>
                                </tr>
                              </tbody>
                            </table>
                          </td>
                          <td class="text-center">18</td>
                        </tr>
                        <tr>
                          <td>
                            <table class="table sub-table">
                              <tr>
                                <td class="sr">11</td>
                                <td class="teams">Cincinnati Bengals</td>
                              </tr>
                              <tr>
                                <td class="sr">12</td>
                                <td class="teams">Dallas Cowboys</td>
                              </tr>
                              <tr>
                                <td class="sr">13</td>
                                <td class="teams">Arizona Cardinals</td>
                              </tr>
                            </table>
                          </td>
                          <td class="group-list">
                            <ul>
                              <li>7</li>
                              <li>5</li>
                              <li>2</li>
                              <li>0</li>
                            </ul>
                            <ul>
                              <li>7</li>
                              <li>5</li>
                              <li>2</li>
                              <li>0</li>
                            </ul>
                            <ul>
                              <li>7</li>
                              <li>5</li>
                              <li>2</li>
                              <li>0</li>
                            </ul>
                          </td>
                          <td>
                            <table class="table">
                              <tbody>
                                <tr>
                                  <td class="goals group-data">17:7<br>17:7<br>17:7</td>
                                  <td class="results group-list">
                                    <ul class="last-5">
                                      <li class="green">W</li>
                                      <li class="green">W</li>
                                      <li class="yellow">D</li>
                                      <li class="green">W</li>
                                      <li class="red">L</li>
                                    </ul>
                                    <ul class="last-5">
                                      <li class="green">W</li>
                                      <li class="green">W</li>
                                      <li class="green">W</li>
                                      <li class="green">W</li>
                                      <li class="red">L</li>
                                    </ul>
                                    <ul class="last-5">
                                      <li class="green">W</li>
                                      <li class="green">W</li>
                                      <li class="green">W</li>
                                      <li class="green">W</li>
                                      <li class="red">L</li>
                                    </ul>
                                  </td>
                                </tr>
                              </tbody>
                            </table>
                          </td>
                          <td class="text-center group-data">18<br>17<br>13</td>
                        </tr>
                        <tr>
                          <td>
                            <table class="table">
                              <tr>
                                <td class="sr">14</td>
                                <td class="teams">Buffalo Bills</td>
                              </tr>
                            </table>
                          </td>
                          <td>
                            <ul>
                              <li>7</li>
                              <li>5</li>
                              <li>2</li>
                              <li>0</li>
                            </ul>
                          </td>
                          <td>
                            <table class="table">
                              <tbody>
                                <tr>
                                  <td class="goals">17:7</td>
                                  <td class="results">
                                    <ul class="last-5">
                                      <li class="green">W</li>
                                      <li class="green">W</li>
                                      <li class="green">W</li>
                                      <li class="green">W</li>
                                      <li class="red">L</li>
                                    </ul>
                                  </td>
                                </tr>
                              </tbody>
                            </table>
                          </td>
                          <td class="text-center">15</td>
                        </tr>
                        <tr>
                          <td>
                            <table class="table sub-table">
                              <tr>
                                <td class="sr">15</td>
                                <td class="teams">Cincinnati Bengals</td>
                              </tr>
                              <tr>
                                <td class="sr">16</td>
                                <td class="teams">Dallas Cowboys</td>
                              </tr>
                              <tr>
                                <td class="sr">17</td>
                                <td class="teams">Arizona Cardinals</td>
                              </tr>
                            </table>
                          </td>
                          <td class="group-list">
                            <ul>
                              <li>7</li>
                              <li>5</li>
                              <li>2</li>
                              <li>0</li>
                            </ul>
                            <ul>
                              <li>7</li>
                              <li>5</li>
                              <li>2</li>
                              <li>0</li>
                            </ul>
                            <ul>
                              <li>7</li>
                              <li>5</li>
                              <li>2</li>
                              <li>0</li>
                            </ul>
                          </td>
                          <td>
                            <table class="table">
                              <tbody>
                                <tr>
                                  <td class="goals group-data">17:7<br>17:7<br>17:7</td>
                                  <td class="results group-list">
                                    <ul class="last-5">
                                      <li class="green">W</li>
                                      <li class="green">W</li>
                                      <li class="yellow">D</li>
                                      <li class="green">W</li>
                                      <li class="red">L</li>
                                    </ul>
                                    <ul class="last-5">
                                      <li class="green">W</li>
                                      <li class="green">W</li>
                                      <li class="green">W</li>
                                      <li class="green">W</li>
                                      <li class="red">L</li>
                                    </ul>
                                    <ul class="last-5">
                                      <li class="green">W</li>
                                      <li class="green">W</li>
                                      <li class="green">W</li>
                                      <li class="green">W</li>
                                      <li class="red">L</li>
                                    </ul>
                                  </td>
                                </tr>
                              </tbody>
                            </table>
                          </td>
                          <td class="text-center group-data">18<br>17<br>13</td>
                        </tr>
                      </tbody>
                    </table>
                  </div>  -->


                  <div id="home" class="tab-content">
                    <div class="head heda-title">
                      <div class="row1">#</div>
                      <div class="row2">Team</div>
                      <div class="row3">
                        <span>P</span> 
                        <span>W</span> 
                        <span>D</span> 
                        <span>L</span>
                      </div>
                      <div class="row4">Goals</div>
                      <div class="row5">
                        <span>Last5</span> 
                        <i></i>
                      </div>
                      <div class="row6">Points</div>
                    </div>

                    <div class="head data-list">
                      <div class="row1">1</div> 
                      <div class="row2">Arsenal</div> 
                      <div class="row3">
                        <span>3</span> 
                        <span>3</span> 
                        <span>0</span> 
                        <span>0</span>
                      </div> 
                      <div class="row4">8:4</div> 
                      <div class="row5">
                        <b class="ww"></b> 
                        <b class="ww"></b> 
                        <b class="ww"></b> 
                        <b class="ww"></b> 
                        <b class="ll"></b> 
                      </div> 
                      <div class="row6">9</div>
                    </div>

                    <div class="head data-list">
                      <div class="row1">2</div> 
                      <div class="row2">Manchester City</div> 
                      <div class="row3">
                        <span>3</span> 
                        <span>3</span> 
                        <span>0</span> 
                        <span>0</span>
                      </div> 
                      <div class="row4">14:2</div> 
                      <div class="row5">
                        <b class="ww"></b> 
                        <b class="dd"></b> 
                        <b class="ww"></b> 
                        <b class="ww"></b> 
                        <b class="dd"></b> 
                      </div> 
                      <div class="row6">17</div>
                    </div>
                  </div>


                  <div id="away" class="tab-content">
                    <div class="head heda-title">
                      <div class="row1">#</div>
                      <div class="row2">Team</div>
                      <div class="row3">
                        <span>P</span> 
                        <span>W</span> 
                        <span>D</span> 
                        <span>L</span>
                      </div>
                      <div class="row4">Goals</div>
                      <div class="row5">
                        <span>Last5</span> 
                        <i></i>
                      </div>
                      <div class="row6">Points</div>
                    </div>

                    <div class="head data-list">
                      <div class="row1">1</div> 
                      <div class="row2">Arsenal</div> 
                      <div class="row3">
                        <span>4</span> 
                        <span>3</span> 
                        <span>0</span> 
                        <span>1</span>
                      </div> 
                      <div class="row4">9:3</div> 
                      <div class="row5">
                        <b class="ww"></b> 
                        <b class="ww"></b> 
                        <b class="ww"></b> 
                        <b class="ww"></b> 
                        <b class="ll"></b> 
                      </div> 
                      <div class="row6">9</div>
                    </div>

                    <div class="head data-list">
                      <div class="row1">2</div> 
                      <div class="row2">Manchester City</div> 
                      <div class="row3">
                        <span>4</span> 
                        <span>2</span> 
                        <span>2</span> 
                        <span>0</span>
                      </div> 
                      <div class="row4">9:4</div> 
                      <div class="row5">
                        <b class="ww"></b> 
                        <b class="dd"></b> 
                        <b class="ww"></b> 
                        <b class="ww"></b> 
                        <b class="dd"></b> 
                      </div> 
                      <div class="row6">8</div>
                    </div>
                  </div> 

                  <!--<div id="away" class="tab-content">
                    <div class="table-responsive">
                      <table class="table">
                        <thead>
                          <tr>
                            <th>
                              <table class="table">
                                <tr>
                                  <td class="sr">#</td>
                                  <td class="teams">Team</td>
                                </tr>
                              </table>
                            </th>
                            <th>
                              <ul>
                                <li>P</li>
                                <li>W</li>
                                <li>D</li>
                                <li>L</li>
                              </ul>
                            </th>
                            <th>
                              <table class="table">
                                <tbody>
                                  <tr>
                                    <td class="goals">Goals</td>
                                    <td class="results">Last5 <br> <img src="includes/images/arrow.png" alt=""></td>
                                  </tr>
                                </tbody>
                              </table>
                            </th>
                            <th class="text-center">Points</th>
                          </tr>
                        </thead>
                        <tbody>
                          <tr>
                            <td>
                              <table class="table">
                                <tr>
                                  <td class="sr">1</td>
                                  <td class="teams">Buffalo Bills</td>
                                </tr>
                              </table>
                            </td>
                            <td>
                              <ul>
                                <li>7</li>
                                <li>5</li>
                                <li>2</li>
                                <li>0</li>
                              </ul>
                            </td>
                            <td>
                              <table class="table">
                                <tbody>
                                  <tr>
                                    <td class="goals">17:7</td>
                                    <td class="results">
                                      <ul class="last-5">
                                        <li class="green">W</li>
                                        <li class="green">W</li>
                                        <li class="green">W</li>
                                        <li class="green">W</li>
                                        <li class="red">L</li>
                                      </ul>
                                    </td>
                                  </tr>
                                </tbody>
                              </table>
                            </td>
                            <td class="text-center">18</td>
                          </tr>
                          <tr>
                            <td>
                              <table class="table sub-table">
                                <tr>
                                  <td class="sr">2</td>
                                  <td class="teams">Cincinnati Bengals</td>
                                </tr>
                                <tr>
                                  <td class="sr">3</td>
                                  <td class="teams">Dallas Cowboys</td>
                                </tr>
                                <tr>
                                  <td class="sr">4</td>
                                  <td class="teams">Arizona Cardinals</td>
                                </tr>
                              </table>
                            </td>
                            <td class="group-list">
                              <ul>
                                <li>7</li>
                                <li>5</li>
                                <li>2</li>
                                <li>0</li>
                              </ul>
                              <ul>
                                <li>7</li>
                                <li>5</li>
                                <li>2</li>
                                <li>0</li>
                              </ul>
                              <ul>
                                <li>7</li>
                                <li>5</li>
                                <li>2</li>
                                <li>0</li>
                              </ul>
                            </td>
                            <td>
                              <table class="table">
                                <tbody>
                                  <tr>
                                    <td class="goals group-data">17:7<br>17:7<br>17:7</td>
                                    <td class="results group-list">
                                      <ul class="last-5">
                                        <li class="green">W</li>
                                        <li class="green">W</li>
                                        <li class="yellow">D</li>
                                        <li class="green">W</li>
                                        <li class="red">L</li>
                                      </ul>
                                      <ul class="last-5">
                                        <li class="green">W</li>
                                        <li class="green">W</li>
                                        <li class="green">W</li>
                                        <li class="green">W</li>
                                        <li class="red">L</li>
                                      </ul>
                                      <ul class="last-5">
                                        <li class="green">W</li>
                                        <li class="green">W</li>
                                        <li class="green">W</li>
                                        <li class="green">W</li>
                                        <li class="red">L</li>
                                      </ul>
                                    </td>
                                  </tr>
                                </tbody>
                              </table>
                            </td>
                            <td class="text-center group-data">18<br>17<br>13</td>
                          </tr>
                        </tbody>
                      </table>
                    </div>
                </div>  -->

              </div>
            </div>
          </article>
        </div>
        <div class="col-md-4">
          <aside>
            <div data-bs-spy="scroll" data-bs-target="#navbar-example2" data-bs-offset="0"
              class="scrollspy-example top-scorer" tabindex="0">
              <!--<h2 class="top-scorer-title">Top Scorer 21-22</h2> -->
              
              <div class="top-score-h1">
                <span class="top-score-title"> Top Scorer 21-22</span>
              </div>

              <!-- <div class="table-wrapp">
                <table class="table players-list">
                  <thead >
                    <tr>
                      <th class="ranking-player">R</th>
                      <th>Player/Team</th>
                      <th>G</th>
                      <th>HG</th>
                      <th>AG</th>
                    </tr>
                  </thead>
                  <tbody>
                    <tr>
                      <td class="ranking-player">1</td>
                      <td>
                        <span>
                          <img src="includes/images/player_03.png" height="35" alt="" />
                          <div class="player-data ms-1">
                            <h3>PLayer Name</h3>
                            <p>City</p>
                          </div>
                        </span>
                      </td>
                      <td>50</td>
                      <td>50</td>
                      <td>50</td>
                    </tr>
                    <tr>
                      <td class="ranking-player">2</td>
                      <td>
                        <span>
                          <img src="includes/images/player_03.png" height="35" alt="" />
                          <div class="player-data ms-1">
                            <h3>PLayer Name</h3>
                            <p>City</p>
                          </div>
                        </span>
                      </td>
                      <td>50</td>
                      <td>50</td>
                      <td>50</td>
                    </tr>
                    <tr>
                      <td class="ranking-player">3</td>
                      <td>
                        <span>
                          <img src="includes/images/player_03.png" height="35" alt="" />
                          <div class="player-data ms-1">
                            <h3>PLayer Name</h3>
                            <p>City</p>
                          </div>
                        </span>
                      </td>
                      <td>50</td>
                      <td>50</td>
                      <td>50</td>
                    </tr>
                    <tr>
                      <td class="ranking-player">4</td>
                      <td>
                        <span>
                          <img src="includes/images/player_03.png" height="35" alt="" />
                          <div class="player-data ms-1">
                            <h3>PLayer Name</h3>
                            <p>City</p>
                          </div>
                        </span>
                      </td>
                      <td>50</td>
                      <td>50</td>
                      <td>50</td>
                    </tr>
                    <tr>
                      <td class="ranking-player">5</td>
                      <td>
                        <span>
                          <img src="includes/images/player_03.png" height="35" alt="" />
                          <div class="player-data ms-1">
                            <h3>PLayer Name</h3>
                            <p>City</p>
                          </div>
                        </span>
                      </td>
                      <td>50</td>
                      <td>50</td>
                      <td>50</td>
                    </tr>
                  </tbody>
                </table>
              </div>  -->

              <div class="head heda-title">
                <div class="row1 pllsame rbox">R</div> 
                <div class="row2 pllsame pbox">Player/Team</div> 
                <div class="row4 pllsame gbox">G</div>
                <div class="row5 pllsame hgbox">HG</div>
                <div class="row6 pllsame agbox">AG</div>
              </div>

              <div class="l_players_mainbox">
                
                <div class="head data-list">
                  <div class="row1 lpm_itembox">1</div>
                  
                  <div class="row2 lpm_itembox">
                    <span class="pl2i_imgbox">
                    <img src="https://www.a8livetv.com/api/images/football/team/player/2019824101538.png" alt="" class="pl2i_img">
                    </span>
                    <div class="pl2i_conbox">
                      <div class="pl2i_conbox1">Erling Haaland</div>
                      <div class="pl2i_conbox2">Manchester City</div>
                    </div>
                  </div>

                  <div class="row3 lpm_itembox">11</div>
                  <div class="row4 lpm_itembox">6</div>
                  <div class="row5 lpm_itembox">5</div> 
                  

                </div>

                <div class="head data-list">
                  <div class="row1 lpm_itembox">2</div>
                  
                  <div class="row2 lpm_itembox">
                    <span class="pl2i_imgbox">
                    <img src="https://www.a8livetv.com/api/images/football/team/player/201862110351.png" alt="" class="pl2i_img">
                    </span>
                    <div class="pl2i_conbox">
                      <div class="pl2i_conbox1">Harry Kane</div>
                      <div class="pl2i_conbox2">Tottenham Hotspur</div>
                    </div>
                  </div>

                  <div class="row3 lpm_itembox">6</div>
                  <div class="row4 lpm_itembox">3</div>
                  <div class="row5 lpm_itembox">3</div> 
                  

                </div>

                <div class="head data-list">
                  <div class="row1 lpm_itembox">3</div>
                  
                  <div class="row2 lpm_itembox">
                    <span class="pl2i_imgbox">
                    <img src="https://www.a8livetv.com/api/images/football/team/player/201863110605.png" alt="" class="pl2i_img">
                    </span>
                    <div class="pl2i_conbox">
                      <div class="pl2i_conbox1">Aleksandar Mitrovic</div>
                      <div class="pl2i_conbox2">Fulham</div>
                    </div>
                  </div>

                  <div class="row3 lpm_itembox">6</div>
                  <div class="row4 lpm_itembox">4</div>
                  <div class="row5 lpm_itembox">2</div> 
                  

                </div>

                <div class="head data-list">
                  <div class="row1 lpm_itembox">3</div>
                  
                  <div class="row2 lpm_itembox">
                    <span class="pl2i_imgbox">
                    <img src="https://www.a8livetv.com/api/images/football/team/player/201863110605.png" alt="" class="pl2i_img">
                    </span>
                    <div class="pl2i_conbox">
                      <div class="pl2i_conbox1">Aleksandar Mitrovic</div>
                      <div class="pl2i_conbox2">Fulham</div>
                    </div>
                  </div>

                  <div class="row3 lpm_itembox">6</div>
                  <div class="row4 lpm_itembox">4</div>
                  <div class="row5 lpm_itembox">2</div> 
                  

                </div>

                <div class="head data-list">
                  <div class="row1 lpm_itembox">3</div>
                  
                  <div class="row2 lpm_itembox">
                    <span class="pl2i_imgbox">
                    <img src="https://www.a8livetv.com/api/images/football/team/player/201863110605.png" alt="" class="pl2i_img">
                    </span>
                    <div class="pl2i_conbox">
                      <div class="pl2i_conbox1">Aleksandar Mitrovic</div>
                      <div class="pl2i_conbox2">Fulham</div>
                    </div>
                  </div>

                  <div class="row3 lpm_itembox">6</div>
                  <div class="row4 lpm_itembox">4</div>
                  <div class="row5 lpm_itembox">2</div> 
                  

                </div>

                <div class="head data-list">
                  <div class="row1 lpm_itembox">3</div>
                  
                  <div class="row2 lpm_itembox">
                    <span class="pl2i_imgbox">
                    <img src="https://www.a8livetv.com/api/images/football/team/player/201863110605.png" alt="" class="pl2i_img">
                    </span>
                    <div class="pl2i_conbox">
                      <div class="pl2i_conbox1">Aleksandar Mitrovic</div>
                      <div class="pl2i_conbox2">Fulham</div>
                    </div>
                  </div>

                  <div class="row3 lpm_itembox">6</div>
                  <div class="row4 lpm_itembox">4</div>
                  <div class="row5 lpm_itembox">2</div> 
                  

                </div>

                <div class="head data-list">
                  <div class="row1 lpm_itembox">3</div>
                  
                  <div class="row2 lpm_itembox">
                    <span class="pl2i_imgbox">
                    <img src="https://www.a8livetv.com/api/images/football/team/player/201863110605.png" alt="" class="pl2i_img">
                    </span>
                    <div class="pl2i_conbox">
                      <div class="pl2i_conbox1">Aleksandar Mitrovic</div>
                      <div class="pl2i_conbox2">Fulham</div>
                    </div>
                  </div>

                  <div class="row3 lpm_itembox">6</div>
                  <div class="row4 lpm_itembox">4</div>
                  <div class="row5 lpm_itembox">2</div> 
                  

                </div>

                <div class="head data-list">
                  <div class="row1 lpm_itembox">3</div>
                  
                  <div class="row2 lpm_itembox">
                    <span class="pl2i_imgbox">
                    <img src="https://www.a8livetv.com/api/images/football/team/player/201863110605.png" alt="" class="pl2i_img">
                    </span>
                    <div class="pl2i_conbox">
                      <div class="pl2i_conbox1">Aleksandar Mitrovic</div>
                      <div class="pl2i_conbox2">Fulham</div>
                    </div>
                  </div>

                  <div class="row3 lpm_itembox">6</div>
                  <div class="row4 lpm_itembox">4</div>
                  <div class="row5 lpm_itembox">2</div> 
                  

                </div>

                <div class="head data-list">
                  <div class="row1 lpm_itembox">3</div>
                  
                  <div class="row2 lpm_itembox">
                    <span class="pl2i_imgbox">
                    <img src="https://www.a8livetv.com/api/images/football/team/player/201863110605.png" alt="" class="pl2i_img">
                    </span>
                    <div class="pl2i_conbox">
                      <div class="pl2i_conbox1">Aleksandar Mitrovic</div>
                      <div class="pl2i_conbox2">Fulham</div>
                    </div>
                  </div>

                  <div class="row3 lpm_itembox">6</div>
                  <div class="row4 lpm_itembox">4</div>
                  <div class="row5 lpm_itembox">2</div> 
                  

                </div>

                <div class="head data-list">
                  <div class="row1 lpm_itembox">3</div>
                  
                  <div class="row2 lpm_itembox">
                    <span class="pl2i_imgbox">
                    <img src="https://www.a8livetv.com/api/images/football/team/player/201863110605.png" alt="" class="pl2i_img">
                    </span>
                    <div class="pl2i_conbox">
                      <div class="pl2i_conbox1">Aleksandar Mitrovic</div>
                      <div class="pl2i_conbox2">Fulham</div>
                    </div>
                  </div>

                  <div class="row3 lpm_itembox">6</div>
                  <div class="row4 lpm_itembox">4</div>
                  <div class="row5 lpm_itembox">2</div> 
                  

                </div>

                <div class="head data-list">
                  <div class="row1 lpm_itembox">3</div>
                  
                  <div class="row2 lpm_itembox">
                    <span class="pl2i_imgbox">
                    <img src="https://www.a8livetv.com/api/images/football/team/player/201863110605.png" alt="" class="pl2i_img">
                    </span>
                    <div class="pl2i_conbox">
                      <div class="pl2i_conbox1">Aleksandar Mitrovic</div>
                      <div class="pl2i_conbox2">Fulham</div>
                    </div>
                  </div>

                  <div class="row3 lpm_itembox">6</div>
                  <div class="row4 lpm_itembox">4</div>
                  <div class="row5 lpm_itembox">2</div> 
                  

                </div>

                <div class="head data-list">
                  <div class="row1 lpm_itembox">3</div>
                  
                  <div class="row2 lpm_itembox">
                    <span class="pl2i_imgbox">
                    <img src="https://www.a8livetv.com/api/images/football/team/player/201863110605.png" alt="" class="pl2i_img">
                    </span>
                    <div class="pl2i_conbox">
                      <div class="pl2i_conbox1">Aleksandar Mitrovic</div>
                      <div class="pl2i_conbox2">Fulham</div>
                    </div>
                  </div>

                  <div class="row3 lpm_itembox">6</div>
                  <div class="row4 lpm_itembox">4</div>
                  <div class="row5 lpm_itembox">2</div> 
                  

                </div>

                <div class="head data-list">
                  <div class="row1 lpm_itembox">3</div>
                  
                  <div class="row2 lpm_itembox">
                    <span class="pl2i_imgbox">
                    <img src="https://www.a8livetv.com/api/images/football/team/player/201863110605.png" alt="" class="pl2i_img">
                    </span>
                    <div class="pl2i_conbox">
                      <div class="pl2i_conbox1">Aleksandar Mitrovic</div>
                      <div class="pl2i_conbox2">Fulham</div>
                    </div>
                  </div>

                  <div class="row3 lpm_itembox">6</div>
                  <div class="row4 lpm_itembox">4</div>
                  <div class="row5 lpm_itembox">2</div> 
                  

                </div>

                <div class="head data-list">
                  <div class="row1 lpm_itembox">3</div>
                  
                  <div class="row2 lpm_itembox">
                    <span class="pl2i_imgbox">
                    <img src="https://www.a8livetv.com/api/images/football/team/player/201863110605.png" alt="" class="pl2i_img">
                    </span>
                    <div class="pl2i_conbox">
                      <div class="pl2i_conbox1">Aleksandar Mitrovic</div>
                      <div class="pl2i_conbox2">Fulham</div>
                    </div>
                  </div>

                  <div class="row3 lpm_itembox">6</div>
                  <div class="row4 lpm_itembox">4</div>
                  <div class="row5 lpm_itembox">2</div> 
                  

                </div>

                <div class="head data-list">
                  <div class="row1 lpm_itembox">3</div>
                  
                  <div class="row2 lpm_itembox">
                    <span class="pl2i_imgbox">
                    <img src="https://www.a8livetv.com/api/images/football/team/player/201863110605.png" alt="" class="pl2i_img">
                    </span>
                    <div class="pl2i_conbox">
                      <div class="pl2i_conbox1">Aleksandar Mitrovic</div>
                      <div class="pl2i_conbox2">Fulham</div>
                    </div>
                  </div>

                  <div class="row3 lpm_itembox">6</div>
                  <div class="row4 lpm_itembox">4</div>
                  <div class="row5 lpm_itembox">2</div> 
                  

                </div>

              </div>

            </div>

            <div class="league-info">
              <div class="pl2i_headingbox">
                <span class="pl2i_h_span">League Info</span>
              </div>
              <div class="pl2i_innerbox">
                <div class="pl2i_ib_teambox">
                  <span class="pl2i_ib_teamboxspan">
                    <img src="https://www.a8livetv.com/api/images/football/team/logo/164609952917.png" class="pl2i_ib_teambox_img">
                    <span class="pl2i_ib_teamboxspan1">Tottenham Hotspur</span>
                    <span class="pl2i_ib_teamboxspan2"> Most Title (38)</span>
                  </span>
                </div>
                <div class="pl2i_most_vbox">
                  <div class="pl2i_most_vbox1">Most valuable player</div>
                  <div class="pl2i_most_vbox2">
                    <div class="pl2i_most_vbox2div1">
                      <span class="pl2i_most_vbox2div1span1">Tobi Omole</span>
                    </div>
                    <div class="pl2i_most_vbox2div2">€ 10800.00</div>
                  </div>
                </div>
                <div class="pl2i_container_box">
                  <div class="pl2i_infobox1">Info</div>
                  <div class="pl2i_infflex1">
                    <div class="pl2i_infflex1div1">Rounds</div>
                    <div class="pl2i_infflex1div2">38</div>
                  </div>
                  <div class="pl2i_infflex1">
                    <div class="pl2i_infflex1div1">Players</div>
                    <div class="pl2i_infflex1div2">629</div>
                  </div>
                  <div class="pl2i_infflex1">
                    <div class="pl2i_infflex1div1">Foreigners</div>
                    <div class="pl2i_infflex1div2">547</div>
                  </div>
                  <div class="pl2i_infflex1">
                    <div class="pl2i_infflex1div1">Yellow cards</div>
                    <div class="pl2i_infflex1div2">258</div>
                  </div>
                  <div class="pl2i_infflex1">
                    <div class="pl2i_infflex1div1">Red cards</div>
                    <div class="pl2i_infflex1div2">4</div>
                  </div>
                </div>
              </div>
            </div>
            
            <!-- <div class="league-info">
              <h3>League Info</h3>
              <div class="hotspur">
                <h3>Tottenham hotspur</h3>
                <p>Most Title (38)</p>
              </div>
              <table style="width: 100%; margin-top: 20px">
                <tr rowspan="2">
                  <th colspan="2" style="padding: 20px 0">
                    Most Valuable player
                  </th>
                </tr>

                <tr>
                  <td>Tobi Omole</td>
                  <td class="tobi-omole" style="
                        text-align: right;
                        color: #aa7a0b;
                        font-weight: 600;
                      ">
                    € 10000.00
                  </td>
                </tr>
                <tr>
                  <td colspan="2" style="padding: 20px 0; font-weight: 700">
                    Info
                  </td>
                </tr>
                <tr>
                  <td style="color: #a2a59e; padding: 10px 0">Rounds</td>
                  <td class="player-info">36</td>
                </tr>
                <tr>
                  <td style="color: #a2a59e; padding: 10px 0">Players</td>
                  <td class="player-info">529</td>
                </tr>
                <tr>
                  <td style="color: #a2a59e; padding: 10px 0">Foreigners</td>
                  <td class="player-info">547</td>
                </tr>
                <tr>
                  <td style="color: #a2a59e; padding: 10px 0">
                    Yellow cards
                  </td>
                  <td class="player-info">258</td>
                </tr>
                <tr>
                  <td style="color: #a2a59e; padding: 10px 0">Red cards</td>
                  <td class="player-info" >4</td>
                </tr>
              </table>
            </div>  -->

          </aside>
        </div>
      </div>
    </div>
  </section>
  
  




    </div>  <!-- panel_details-->

<script>

openDefaultTab("all");

  function TabOpened(){
    $('span.standingboxfilter').removeClass('active');
  }


  function openDefaultTab(tabName){

    let i, tabContent, tabItems;
    tabContent = document.getElementsByClassName("tab-content");
    for (i = 0; i < tabContent.length; i++) {
      tabContent[i].style.display = "none";
    }

    tabItems = document.getElementsByClassName("tabs-item");
    for (i = 0; i < tabItems.length; i++) {
      tabItems[i].className = tabItems[i].className.replace(" active", "");
    }

      $('#all').addClass("active");
      document.getElementById("all").style.display = "block";
  }

</script>
    