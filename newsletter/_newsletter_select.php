<p>  <label for="newsletter_id"><?=NEWSLETTERS?></label>  <select id="newsletter_id" name="newsletter_id"><?php foreach ($newsletters as $n) { ?>    <option value="<?=$n->id?>"><?=date(PHP_DATE, strtotime($n->created_at)) . ' - ' . $n->subject?></option><?php } ?>  </select></p>