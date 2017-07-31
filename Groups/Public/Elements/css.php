<?php
/* NewStandard Example CSS Sheet

    Pleaase see the NewStandard Example Element Sheet for elements that can be inserted into qualifying style sheets. 

    PUTTING A SPACE AFTER THE SEMICOLON ON THE LAST LINE WILL CREATE A PARSING ERROR. For best results, stay between the mentions of "HEREDOT".

    This sheet will work as an internal style sheet.
*/
echo <<<HEREDOT
    <style type="text/css">
        body {
            color:${TextColor};
            background-color:${BackColor};
            font-family: ${Fonts};
        }
        a  { 
            color:${New_Link}; 
            text-decoration:none;
        }
            a:visited { color:${Visited_Link} }; 
            a:hover { color:${Hover_Link}; }
            a:active { color:${Active_Link}; }
        }
        p   {
               margin: 0px;
               padding: 0px;
        }
        .pagestyle { 
            width:100%;
            padding:1em; 
            background-color: ${Ext_Color};
            font-size: ${TitleFontSize};
        }
        .header {
                font-weight: normal; 
                font-style: normal; 
                text-decoration: none; 
                font-size: ${TitleFontSize};
                text-align:center;
                background-color: ${Header_back};
                border-width: 2px;
                border-top-width: 0;
                border-style: solid;
                border-color: #000000;
        }
        .boarder {
            width: 100%;
            padding: 1em;
        }
        .menu{
            text-align:center;
            color: ${MenueText};
            font-size: 15pt;
        }
        .leftbar{
            width: 25%;
            float:left; 
          background-color: ${Sidebar_Back}; 
          font-size: 15pt;
          text-align: center;
          padding-left: 1%;
          padding-right: 1%;
          padding-bottom: 5px;
      }
      .maincontent{
          margin-left: 25%;
          background-color: ${Main_Win_Back};
          font-size: ${MainFont};
      }
      .sidenotehead{
          padding-left: 2%;
          padding-right: 2%;
          padding-bottom: 5px;
          font-size: ${Update_Title};
          background-color: ${Update_Boarder};
      }
      .sidenotebody{
          font-size: ${Update_Text};
          background-color: ${Update_Win};
      }
      .chat{
      }
      nav ul li{
        padding: 20px, 20px, 20px, 20px;
                  display: inline-table;
                  border-radius: 10px;
                  }
      nav ul {
        padding: 20px, 20px, 20px, 20px;
        border-radius: 10px;
        list-style: none;
        position: relative;
        display: inline-table;

}
      nav ul:after {
                  content: "";
                  clear: both;
                  displlay: inline-table;
                  }
      nav ul ul{
        display: none;
      }
        nav ul li:hover > ul {
        display: block;
        }
    </style>
HEREDOT;

?>
