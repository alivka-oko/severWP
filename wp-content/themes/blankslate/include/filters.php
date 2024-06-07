<?php
add_filter('wpc_terms_before_display', 'wpc_sort_terms_by_value', 10, 4);

function wpc_sort_terms_by_value($terms, $filter, $set, $urlManager)
{
    if (!is_null($filter) && isset($filter['e_name']) && $filter['e_name'] === 'floors') {
        $sorted_terms = $terms;
        $sorted_checkboxes = [];
        foreach ($sorted_terms as $term) {
            $term_value = intval($term->name);
            $sorted_checkboxes[$term_value] = $term;
        }
        ksort($sorted_checkboxes);
        return array_values($sorted_checkboxes);
    }
    return $terms;
}
