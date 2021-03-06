<?php if(!defined('KIRBY')) exit ?>

title: Section (row)
pages:
  template:
    - _section_column
files: true
fields:
  title:
    label: Title
    type:  text
  span:
    label: Span
    type:  select
    options:
      1:  One
      2:  Two
      3:  Three
      4:  Four
      5:  Five
      6:  Six
      7:  Seven
      8:  Eight
      9:  Nine
      10: Ten
      11: Eleven
      12: Twelve
      13: Thirteen
      14: Fourteen
      15: Fifteen
      16: Sixteen
      auto: Auto / Fluid
      full: Full Width (requires full width grid)
    default: 1