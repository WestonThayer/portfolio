---
layout: post
title: Introducing the TextLine
---

**tldr:** UI frameworks should stop putting text in a box because it's counter to the design intent doesn't withstand localization. I've created a prototype implementation of the TextLine paradigm in XAML.

****

I've been thinking a lot about the elements of good typography lately. Specifically, I've thought about aligning to type to a [grid](http://en.wikipedia.org/wiki/Grid_(graphic_design)) and how to technically achieve it.

In print-based graphic design, defining a grid and aligning content to it is fairly straight forward. With responsive websites that reflow text and adapt layout containers, it gets much harder to keep a static grid around. But don't miss the forest for the trees - remember that in the end, the grid is invisible. Its true purpose is to align content in relation to other content. And that turns out to be a much easier way to think.

How type should align to other (usually square) content is interesting.

![Type baseline]({{ site.assetsurl }}2014-10-08-introducing-textline/baseline.png)
*The baseline*

Your eye tends to search out straight lines, even when there are none. Type is made up of many different lines and curves and for Latin-based characters the type's baseline is usually the dominant horizontal line. The baseline is exposed along side other horizontal guides in the [font's metrics](http://en.wikipedia.org/wiki/Typeface#Font_metrics). The horizontal grid encourages content to share the same ladder rung. In the example below, which looks better - the top or the bottom alignment?

![Positioning]({{ site.assetsurl }}2014-10-08-introducing-textline/positioning.png)

The top example is aligned by the descender (the bottom of the *p*). While the *p*'s descenders *do* form a horizontal line, the baseline is visually stronger. As a designer, your intent is to position this bit of copy by its *baseline*.

## The Problem

Positioning your type by baseline is *hard*. Your UI framework doesn't think like you. It puts text in a box. You didn't want to position a box, you wanted to position a baseline!

![Text in a box]({{ site.assetsurl }}2014-10-08-introducing-textline/boxed.png)

That 25px can really only be determined by guess work. [Smashing Magazine](http://www.smashingmagazine.com/2012/12/17/css-baseline-the-good-the-bad-and-the-ugly/) explains that in CSS:

> ...the CSS line-height property doesn’t have an inherent concept of baseline, and each line of text is placed roughly in the middle of the element’s total height.

"Roughly in the middle." Yuck.

It isn't just CSS. XAML has the same issue (although they have [great feature](http://msdn.microsoft.com/en-us/library/windows/apps/xaml/windows.ui.xaml.textlinebounds.aspx) that will help). [Android's baselineAligned](http://www.doubleencore.com/2013/10/shifty-baseline-alignment/) feature attempts to automatically do the work (Android's TextView also has [getBaseline()](http://developer.android.com/reference/android/widget/TextView.html#getBaseline()), which is awesome).

However, these solutions still keep your type in a box. You must tediously nudge your type into place using a top or bottom margin or do math in code. You know what you want, why can't the markup think like you do?!

## Enter TextLine

**Let's stop putting text in a box**! Let's think of text as curves that grow from a horizontal line that you get to position. Before, there was a box that *imprisoned* your type. Now, there's a line that *grows* your type. Let's call this paradigm **TextLine**.

![Position by baseline]({{ site.assetsurl }}2014-10-08-introducing-textline/positionbybaseline.png)

Now you get to say what you want, but this comes with responsibilities. It's up to you to give your type enough room to grow, but don't worry it's not that hard. Use [pseudolocalization](http://en.wikipedia.org/wiki/Pseudolocalization) to see how much space the riskiest glyphs need, then set a top and bottom margin that is *at least* that much.

Now positioning makes sense:

![No more text in a box]({{ site.assetsurl }}2014-10-08-introducing-textline/nobox.png)

This paradigm extends to multi-line scenarios as well. The top margin simply applies to the first line, while the bottom margin applies to the last:

![Multiline scenario]({{ site.assetsurl }}2014-10-08-introducing-textline/nobox-multiline.png)

The baseline just one font metric. There's no need to limit yourself to it. Can text grow out of the cap height line? Yes it can! Center of the em-square? Sure!

## Further Benefits of TextLine

This approach has added benefits when it comes time to localize your app. Localization can sometimes make things real ugly. Why? There aren't very many font families that include the glyphs used *all* of the most popular languages. To name a few:

* English
* Chinese
* Japanese
* Spanish
* French
* German
* Russian

Even if your font family does support all of those, what if you ever want to support something more rare like Hindi, Thai, or Sanscrit?

If you have plans of going world-wide, odds are that you'll need to substitute fonts based on the locale. If your type is in a box, the baseline will move. Why? Different fonts have different font metrics.

![Segoe UI baseline vs MS Mincho]({{ site.assetsurl }}2014-10-08-introducing-textline/segoevsmincho.png)
*Font metrics for Segoe UI (left) and MS Mincho (right) for the same font size*

Type in a box makes this a headache. You'd have to have different margins for different fonts. Now, it's simple. You didn't position a box, you positioned a baseline. Both fonts will render with the baseline in a visually pleasing location.

## Prototype Implementation

Bending our UI frameworks to treat text this way isn't exactly easy. CSS doesn't expose much about font metrics and unless you're in a Canvas, JavaScript doesn't either (although [here's a neat hack](http://stackoverflow.com/questions/10247132/how-can-i-get-the-height-of-the-baseline-of-a-certain-font) that can find the baseline, approximately).

XAML exposes baseline and cap height through the [TextLineBounds](http://msdn.microsoft.com/en-us/library/windows/apps/xaml/windows.ui.xaml.textlinebounds.aspx) API. It's a bit hacky, but you can get a [simple implementation](https://github.com/Cryclops/prototypes-textline) stood up quickly using XAML's [attached properties](http://msdn.microsoft.com/en-us/library/ms749011(v=vs.110).aspx). Here's a screenshot:

![Screenshot of Prototype]({{ site.assetsurl }}2014-10-08-introducing-textline/prototype.png)

The "Page Title" and "Subtitle" are baseline-aligned. This annoying task has been made dead simple:

```xml
<TextBlock
    Text="Page Title"
    FontSize="48"
    ...
    local:TextLine.Mode="Baseline"
    local:TextLine.Margin="120,96,0,0" />
<TextBlock
    Text="Subtitle"
    FontSize="24"
    ...
    local:TextLine.Mode="Baseline"
    local:TextLine.Margin="15,96,0,0" />
```
*Note how both have a top `TextLine.Margin` of 96, even though they're different font sizes*

Earlier, I mentioned that baseline doesn't have to be the origin that text grows from. Cap height is another interesting metric because we frequently have to top-align text with images. This situation is illustrated by the red square next to the "This Horrible Herald's Article" headline:

```xml
<Rectangle Width="200" Height="200" Fill="Red" />
<TextBlock
    Text="This Horrible Herald's Article"
    ...
    local:TextLine.Mode="CapHeight" />
```
*No need for a top margin on either. It just works the way you expect*

Check out the [prototype on GitHub](https://github.com/Cryclops/prototypes-textline). Unfortunately, there are some major issues with this simple implementation:

* Doesn't work with multi-line TextBlocks
* Grid's Auto positioning system will clip the TextBlock unnecessarily because we're changing the Margin late
* Only supports the Baseline and CapHeight modes

A full implementation is certainly possible if you stop using TextBlock and start using DWrite.

That's it. Let me know what you think in the comments!