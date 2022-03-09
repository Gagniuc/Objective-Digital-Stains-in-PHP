# Objective Digital Stains in PHP

The objective digital stain (ODS) is represented by a distribution of points on a two-dimensional (2D) image, which reflects the information structure inside a DNA/RNA sequence. But from where do we get the <kbd>x-axis</kbd> and <kbd>y-axis</kbd> of each point? In order to build an ODS, a scanner that uses sliding windows must be developed first. The <kbd>x-axis</kbd> values and the <kbd>y-axis</kbd> values for a point are calculated from the content of a sliding window. One value for the <kbd>x-axis</kbd> is computed using an algorithm called [self-sequence alignment](https://github.com/Gagniuc/Self-sequence-alignment), and the <kbd>y-axis</kbd> value for a point is computed using the relative frequency of <kbd>C </kbd>plus <kbd>G</kbd> letters from the sliding window. Since the content of each sliding window provides a point on the image, a visible shape starts to reveal itself. In turn, the shape of the distribution pushes the association of the method with a kind of “digital stain,” thus safely establishing the name of the method. In the past, ODSs were simply called “DNA patterns”. 

# The meaning of ODS

On ODSs, the information content (IC) is represented vertically on the <kbd>y-axis</kbd> and the frequency of different letters is represented horizontally on the <kbd>x-axis</kbd>. The overall idea surrounding this method is that similar distributions of two or more DNA/RNA sequences may show similar functions. Interestingly, dissimilar DNA/RNA sequences may show similar ODSs. This intriguing proprietary has been demonstrated repeatedly over time. The first observation was made in 2012 in the journal [BMC Genomics](https://bmcgenomics.biomedcentral.com/articles/10.1186/1471-2164-13-512). There, different ODS patterns have been shown for eukaryotic gene promoters that indicate several generic classes of promoters (more than 10 classes of promoters in eukaryotes). Moreover, in 2013 in [the same journal](https://bmcgenomics.biomedcentral.com/articles/10.1186/1471-2164-14-278), a correlation was made between chromosomal territories and ODS patterns shown by gene promoters. More recently, in 2015, [a publication](https://www.ncbi.nlm.nih.gov/pmc/articles/PMC4574929/) in the [journal PLoS ONE](https://doi.org/10.1371/journal.pone.0137950) showed the connection between ODSs of promoter sequences and the genes associated with type 1 and 2 diabetes. This latest publication showed more clearly that ODSs are able to link the DNA sequence characteristics to different biological functions.

# How to use PHP code

This code generates Objective Digital Stains and it is implemented in PHP. The <kbd>ods.php</kbd> file can uploaded to the <kbd>htdocs</kbd> folder of the server and it can be called directly from the browser as follows:

```
ods.php?s=AGCATGCTATCTTCATACTACTACTAGCTATCTAC
```

The above link will return an image to the browser tab, representing the Objective Digital Stain of the DNA or RNA sequence. Note that the 'include version' folder is redundant and contains the same project structured on three files instead of one.

# Implementations - other

The Objective Digital Stains are also implemented in other languages, from which entire customised applications can be made.

[In Java Script](https://github.com/Gagniuc/Objective-Digital-Stains)

[In PHP](https://github.com/Gagniuc/Objective-Digital-Stains-in-PHP)

[In VB6](https://github.com/Gagniuc/PromKappa-3.0-Objective-Digital-Stains-in-VB6)

# Info on ODSs

 Please read more about DNA patterns (aka Objective Digital Stains) here:
 
- [Eukaryotic genomes may exhibit up to 10 generic classes of gene promoters](https://bmcgenomics.biomedcentral.com/articles/10.1186/1471-2164-13-512)
 
- [Gene promoters show chromosome-specificity and reveal chromosome territories in humans](https://bmcgenomics.biomedcentral.com/articles/10.1186/1471-2164-14-278)

- [Algorithms in Bioinformatics: Theory and Implementation](https://www.wiley.com/en-ag/Algorithms+in+Bioinformatics%3A+Theory+and+Implementation-p-9781119697961)
 
# Screenshot

 ![screenshot](https://github.com/Gagniuc/Objective-Digital-Stains-in-PHP/blob/main/img/ODS%20DNA%20patterns.PNG)

 # References

- <i>Gagniuc P.A. and Ionescu-Tirgoviste C.: Eukaryotic genomes may exhibit up to 10 generic classes of gene promoters. BMC Genomics 2012, 13:512.</i>

- <i>Ionescu-Tîrgovişte C*, Gagniuc PA*, Guja C (2015) Structural Properties of Gene Promoters Highlight More than Two Phenotypes of Diabetes. PLoS ONE 10(9): e0137950.</i>

- <i>Gagniuc P.A. and Ionescu-Tîrgovişte C. Gene promoters show chromosome specificity and reveal chromosome territories in humans, BMC Genomics 2013, 14:278.</i>

- <i>Paul A. Gagniuc. Algorithms in Bioinformatics: Theory and Implementation. John Wiley & Sons, Hoboken, NJ, USA, 2021, ISBN: 9781119697961.</i>

