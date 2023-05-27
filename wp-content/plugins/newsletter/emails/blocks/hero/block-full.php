<style>
    /* Styles which will be removed and injected in the replacing the matching "inline-class" attribute */
    .title {
        font-family: <?php echo $title_style->font_family ?>;
        font-size: <?php echo $title_style->font_size ?>px;
        font-weight: <?php echo $title_style->font_weight ?>;
        color: <?php echo $title_style->font_color ?>;
        line-height: normal;
        margin: 0;
    }

    .text {
        font-family: <?php echo $text_style->font_family ?>;
        font-size: <?php echo $text_style->font_size ?>px;
        font-weight: <?php echo $text_style->font_weight ?>;
        color: <?php echo $text_style->font_color ?>;
        padding: 20px 0 0 0;
        line-height: 1.5em;
        margin: 0;
    }

    .image {
        padding-bottom: 20px;
    }

    .button {
        padding-top: 15px;
    }

</style>

<table width="100%" class="responsive" border="0" cellspacing="0" cellpadding="0">
    <?php if ($media) { ?>
        <tr>
            <td align="center" inline-class="image">
                <?php echo TNP_Composer::image($media); ?>
            </td>
        </tr>
    <?php } ?>

    <tr>
        <td align="center" inline-class="title">
            <?php echo $options['title'] ?>
        </td>
    </tr>

    <tr>
        <td align="center" inline-class="text">
            <?php echo $options['text'] ?>
        </td>
    </tr>

    <tr>
        <td align="center" inline-class="button">
            <?php echo TNP_Composer::button($button_options) ?>
        </td>
    </tr>
</table>
