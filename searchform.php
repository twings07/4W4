

<form action="<?php echo get_home_url() ?>" class="recherche" method="get">
    <input type="text" placeholder="Recherche..." name="s" class="recherche__text" value="<?php get_search_query() ?>">
    <button class="recherche__submit">
        <svg width="15" height="15" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor"
            color="rgb(0, 0, 0)">
            <path fill-rule="evenodd"
                d="M14.53 15.59a8.25 8.25 0 111.06-1.06l5.69 5.69a.75.75 0 11-1.06 1.06l-5.69-5.69zM2.5 9.25a6.75 6.75 0 1111.74 4.547.746.746 0 00-.443.442A6.75 6.75 0 012.5 9.25z">
            </path>
        </svg>
    </button>
</form>