require 'bundler'
Bundler.require


Dir.glob('./lib/*.rb') do |model|
  require model
end

module Name
  class App < Sinatra::Application

    get '/' do
      @test = Birthday.new

      haml :bday
    end

  

  end
end
