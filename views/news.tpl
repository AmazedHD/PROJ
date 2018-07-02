
<h2 style="text-align: center; margin-top: 2%; font-size: 200%" class="zoom2" >NEWS</h2>




<br>




<div style="color: #222222" class="modal-content">

<p style="text-align: center">
    {foreach from=$articles item=article}
        <h2 style="text-align: center">{$article[0]}</h2>
        <p style="text-align: center; margin-right: 30%; margin-left: 30%; display: block;">{$article[1]}</p>
    <img id="myImg" class="crop" style="margin-left: auto; margin-right: auto; display: block;" src="{$article[2]}"  alt="{$article[2]}" />
    <p style="font-size: 120%; text-align: center">_________________________________</p>

    <!-- The Modal -->
    <div id="myModal" class="modal">

        <!-- The Close Button -->
        <span class="close">&times;</span>

        <!-- Modal Content (The Image) -->
        <img class="modal-content" id="img01">

        <!-- Modal Caption (Image Text) -->
        <div id="caption"></div>
    </div>



    {/foreach}
</div>
</p>
<div  style="text-align: center; background-color: white; margin-right: 40%; margin-left: 40%;box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);">
{if $current_page gt 1}
    <a href="index.php?page=news&pageno={$current_page - 1}" style="text-align: center; " class="newsButt">PREVIOUS</a>
{/if}

<h3 style="margin-right: 40%"> Current page: {$current_page} </h3>

{if $current_page lt $number_of_pages}

    <a href="index.php?page=news&pageno={$current_page + 1}" style="text-align: center;"  class="newsButt">NEXT</a>
{/if}
</div>
<br>
<br>
