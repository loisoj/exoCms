<h3>Страницы</h3><br>
<table class="table table-striped" style="width: 400px;">

<?php foreach ($data['pages'] as $page_data) { ?>
<tr>
  <td><b><?=$page_data['title']?></b></td>
  <td align="right">
  <a href="/admin/pages/edit/<?=$page_data['id']?>"><button class="btn btn-sm btn-primary">Изменить</button></a>
  <a href="/admin/pages/delete/<?=$page_data['id']?>" onclick="return confirmDelete();"><button class="btn btn-sm btn-waring">Удалить</button></a>
</td>
</tr>
<?php } ?>
</table>

<br>

<div class="">
  <a href="/admin/pages/add/"><button class="btn btn-sm btn-success">Создать</button></a></td>

</div>