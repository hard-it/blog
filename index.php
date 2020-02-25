<? if(!empty($arResult["PROPERTIES"]['DOCS']['VALUE'])){ ?>
<h3 class="h3-recom">Документы</h3>
<div class="file-load">
	<?foreach($arResult["PROPERTIES"]['DOCS']['VALUE'] as $pid=>$arProperty):?>
	<? $data = CFile::GetFileArray($arProperty); ?>
	<div class="file-load-item">
		<div class="file-inf">
			<a href="<?=$data['SRC']?>" download>
				<span><?=$data['ORIGINAL_NAME']?></span>
				<span><?=round($data['FILE_SIZE']/1024)?> кБ</span>
			</a>
		</div>
	</div>
	<?endforeach?>
</div>
<? } ?>
