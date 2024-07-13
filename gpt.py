import sys
import pygame

def main():
    pygame.init()
    main_surface = pygame.display.set_mode((300, 300))
    pygame.display.set_caption("Pygame Sample")
    font = pygame.font.Font(None, 30)
    text_surface = font.render("Hello World", True, (0, 0, 255))
    main_surface.fill((220, 220, 220))
    main_surface.blit(text_surface, (100, 100))
    pygame.display.update()

    clock = pygame.time.Clock()
    going = True
    while going:
        for event in pygame.event.get():
            if event.type == pygame.QUIT:
                going = False
        clock.tick(10)

    pygame.quit()
    sys.exit()

if __name__ == '__main__':
    main()
