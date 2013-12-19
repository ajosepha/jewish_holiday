require 'date'

class Birthday

    attr_reader :today

    def initialize
        @today = Date.today
    end

    def run
        if tu_bshvat
        elsif purim
        elsif passover
        elsif shavout
        elsif tish_baav
        elsif rosh_hashanah
        elsif yom_kippur
        elsif sukkot
        elsif hannukah
        else
          "No, it's not a Jewish holiday today!"
        end
    end

    def tu_bshvat
        if @today.day == 15 && @today.month == 1
            "It's Tu B'Shvat, the begining of the 'new year' for trees!"
        end
    end

    def purim
        if @today.day == 15 && @today.month == 3
            "Purim starts tonight! Better start drinking!"
        elsif @today.day == 16 && @today.month == 3
            "It's Purim today! What are you dressed up as?"
        end
    end

    def passover
        if @today.day == 14 && @today.month == 4
             "It's the first night of Passover, watch out for that Manishevitz"
        elsif @today.day == 15 && @today.month == 4
             "It's passover, enjoy your gluten-free life!"
        elsif @today.day == 16 && @today.month == 4
             "It's passover, enjoy your gluten-free life!"
        elsif @today.day == 17 && @today.month == 4
             "It's passover, enjoy your gluten-free life!"
        elsif @today.day == 18 && @today.month == 4
             "It's passover, enjoy your gluten-free life!"
        elsif @today.day == 19 && @today.month == 4
             "It's passover, enjoy your gluten-free life!"
        elsif @today.day == 20 && @today.month == 4
             "It's passover, enjoy your gluten-free life!"
        elsif @today.day == 21 && @today.month == 4
             "It's passover, enjoy your gluten-free life!"
        elsif @today.day == 22 && @today.month == 4
            "Congrats! you made it to the last night of Passover! Go have a pizza, you deserve it."
        end
    end

    def shavout
       if @today.day == 3 && @today.month == 6
        "It's the start of Shavout, you probably don't care unless you're in Israel"
      elsif @today.day == 4 && @today.month == 6
        "Still Shavout"
      elsif @today.day == 5 && @today.month == 6
        "Shavout ends tonight!"
      end
    end

    def tish_baav
      if @today.day == 4 && @today.month == 8
        "It's erev Tish B'Av"
      elsif @today.day == 5 && @today.month == 8
        "It's Tish B'Av"
      end
    end

    def rosh_hashanah
      if @today.day == 24 && @today.month == 9
        "Grab some apples and honey, Rosh Hashanah starts tonight"
      elsif @today.day == 25 && @today.month == 9
        "Have some honeycake, it's Rosh Hashanah."
      elsif @today.day == 26 && @today.month == 9
        "Finish off that honeycake before it goes stale, it's the last night of Rosh Hashanh"
      end
    end

    def yom_kippur
      if @today.day == 3 && @today.month == 10
        "Hope you ate a good dinner, Yom Kippur starts tonight"
      elsif @today.day == 4 && @today.month == 10
        "Repent."
      end
    end

    def sukkot
      if @today.day == 8 && @today.month == 10
        "it's Sukkot! Go to the sukkah"
      elsif @today.day == 9 && @today.month == 10
        "Dinner in the great outdoors, its Sukkot!"
      elsif @today.day == 10 && @today.month == 10
        "Dinner in the great outdoors, its Sukkot!"
      elsif @today.day == 11 && @today.month == 10
        "Dinner in the great outdoors, its Sukkot!"
      elsif @today.day == 12 && @today.month == 10
        "Dinner in the great outdoors, its Sukkot!"
      elsif @today.day == 13 && @today.month == 10
        "Dinner in the great outdoors, its Sukkot!"
      elsif @today.day == 14 && @today.month == 10
        "Dinner in the great outdoors, its Sukkot!"
      elsif @today.day == 15 && @today.month == 10
        "Dinner in the great outdoors, its Sukkot!"
      end
    end

    def hannukah
      if @today.day == 16 && @today.month == 12 && @today.year ==2014
        "Presents! Hannukah starts tonight!"
      elsif @today.day == 17 && @today.month == 12 && @today.year ==2014
        "Second night of Hannukah, have a latka!"
      elsif @today.day == 18 && @today.month == 12 && @today.year ==2014
        "Third night of Hannukah"
      elsif @today.day == 19 && @today.month == 12 && @today.year ==2014
        "Fourth night of Hannukah, half way there!"
      elsif @today.day == 20 && @today.month == 12 && @today.year ==2014
        "Fifth night of Hannukah"
      elsif @today.day == 21 && @today.month == 12 && @today.year ==2014
        "Sixth night of Hannukah!"
      elsif @today.day == 22 && @today.month == 12 && @today.year ==2014
        "Seventh night of Hannukah"
      elsif @today.day  == 23 && @today.month == 12 && @today.year ==2014
        "The end of Hannukah!"
      end
    end

end