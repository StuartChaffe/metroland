<form action="<?php echo home_url( '/' ); ?>" method="get" class="search-form">
	<button type="submit" class="search-form__submit"><span class="sr-only">Search</span><svg class="icon icon-search" width="24px" height="25px" viewBox="0 0 24 25" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"><g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd"><g transform="translate(2.000000, 2.000000)" stroke="CurrentColor" stroke-width="3"><circle cx="8.73107491" cy="8.73107491" r="8.73107491"></circle><line x1="14.5891942" y1="14.9567191" x2="20.6324751" y2="21" id="Path-2"></line></g></g></svg></button>
	<label for="search" class="sr-only">Search</label>
	<input type="text" name="s" id="search" class="search-form__input" placeholder="Search..." value="<?php the_search_query(); ?>" />
</form>
