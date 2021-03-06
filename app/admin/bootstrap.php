<?php

/*
 * Describe you custom displays, columns and form items here.
 *
 *		Display::register('customDisplay', '\Foo\Bar\MyCustomDisplay');
 *
 *		Column::register('customColumn', '\Foo\Bar\MyCustomColumn');
 *
 * 		FormItem::register('customElement', \Foo\Bar\MyCustomElement::class);
 *
 */
// Column::register('imageColumn', ImageColumn::class);
FormItem::register('textList', TextList::class);
FormItem::register('galleryList', GalleryList::class);
FormItem::register('jsonField', JsonField::class);
FormItem::register('color', ColorField::class);

Column::register('color', ColorColumn::class);
