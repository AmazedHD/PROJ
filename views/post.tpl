
<div class="modal-content"  style="margin-top: 2%; margin-left: 20%">
    <h1>Post, Delete and Edit</h1>

    <table>

    {foreach from=$articles item=article}
        <tr>
            <td> {$article[0]}</td>
            <td> {$article[1]}</td>
            <td> {$article[2]}</td>
            <td><a href="index.php?page=edit&id={$article[0]}">EDIT</a></td>
            <td><a href="index.php?page=delete&id={$article[0]}">DELETE</a></td>
        </tr>
    {/foreach}

    </table>


</div>